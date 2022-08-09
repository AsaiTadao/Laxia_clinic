<template>
  <div class="main-in">
    <div class="main-content">
      <vue-html2pdf v-if="current"
      :show-layout="controlValue.showLayout"
      :float-layout="controlValue.floatLayout"
      :enable-download="controlValue.enableDownload"
      :preview-modal="controlValue.previewModal"
      :filename="controlValue.filename"
      :paginate-elements-by-height="controlValue.paginateElementsByHeight"
      :pdf-quality="controlValue.pdfQuality"
      :pdf-format="controlValue.pdfFormat"
      :pdf-orientation="controlValue.pdfOrientation"
      :pdf-content-width="controlValue.pdfContentWidth"
      :manual-pagination="controlValue.manualPagination"
      :html-to-pdf-options="htmlToPdfOptions"
      @progress="onProgress($event)"
      @startPagination="startPagination()"
      @hasPaginated="hasPaginated()"
      @beforeDownload="beforeDownload($event)"
      @hasDownloaded="hasDownloaded($event)"
      ref="html2Pdf"
    >
      <pdf-content  @domRendered="domRendered()" :payments='payments' :past_month='month' :current='current' slot="pdf-content" />
    </vue-html2pdf>
      <div v-if="current" class="payment">
        <div>
          <div>
            <p class="payment-ttl">{{ past_month }}月請求金額</p>
              <div>
                <strong>{{ current.total | currency }}</strong>
              </div>
          </div>
          <div>
            <p class="payment-ttl">{{ past_month }}月払い戻し金額</p>
            <div class="refund-calc">
              <strong>{{ current.funding | currency }}</strong>
            </div>
          </div>
        </div>
        <div>
          <p class="payment-ttl">{{ $t('支払先') }}</p>
          <div class="payment-div">
            <div><span>{{ $t('銀行名') }}</span>：<span>〇〇銀行</span></div>
            <div><span>{{ $t('支店名') }}</span>：<span>〇〇支店</span></div>
            <div><span>{{ $t('口座種類') }}</span>：<span>普通</span></div>
            <div><span>{{ $t('口座番号') }}</span>：<span>11111111</span></div>
            <div><span>{{ $t('口座名義') }}</span>：<span>(カ)ラシア</span></div>
          </div>
        </div>
      </div>
      <div class="past-payment">
        <p class="payment-ttl">{{ $t('過去の支払い') }}</p>
        <table class="task-list payment-list">
          <thead>
            <tr>
              <th>{{ $t('月') }}</th>
              <th>{{ $t('支払い合計金額') }}</th>
              <th>{{ $t('手数料') }}</th>
              <th>{{ $t('システム利用料') }}</th>
              <th>{{ $t('利用ポイント') }}</th>
              <th>{{ $t('請求金額') }}</th>
              <th>{{ $t('PDF') }}</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="item in withdraws" :key="item.id">
              <td>{{ item.month | formatDateWithOutDay }}</td>
              <td>{{ item.price | currency }}</td>
              <td>{{ item.tax }}%</td>
              <td>{{ item.system_fee | currency }}</td>
              <td>{{ item.point }}</td>
              <td>{{ (item.price * item.tax / 100 + item.system_fee) | currency }}</td>
              <td><a href="#" @click="downloadPdf(item.month)">{{ $t('ダウンロード') }}</a></td>
            </tr>
          </tbody>
        </table>
        <pagination
          v-if="pageInfo"
          :page="query.page"
          :page-count="pageInfo.last_page"
          :click-handler="handlePaginate" />
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  middleware: 'auth',

  data() {
    return {
       payments: [],
       month:'',
       pdfcurrent:{},
      withdraws: [],
      current: undefined,
      query: {
        per_page: 20,
        page: 1
      },
      pageInfo: undefined,
      past_month: undefined,
      controlValue: {
            showLayout: false,
            floatLayout: true,
            enableDownload: true,
            previewModal: true,
            paginateElementsByHeight: 998,
            manualPagination: true,
            filename: 'billing',
            pdfQuality: 2,
            pdfFormat: 'a4',
            pdfOrientation: 'portrait',
            pdfContentWidth: '800px'
        }
    }
  },
  computed:{
    htmlToPdfOptions() {
      return {
        margin: [1,0],
        filename: "billing.pdf",
        image: {
          type: "jpeg",
          quality: 0.98,
        },

        enableLinks: true,

        html2canvas: {
          scale: this.controlValue.pdfQuality,
          useCORS: true,
        },

        jsPDF: {
          unit: "in",
          format: this.controlValue.pdfFormat,
          orientation: this.controlValue.pdfOrientation,
        },
      };
    },
  },
  mounted() {
    this.past_month = this.$moment().subtract(1,'months').endOf('month').format('M');
    this.initData();

  },

  methods: {
    initData() {
      this.$store.dispatch('state/setIsLoading')
      const qs = this.$utils.getQueryString(this.query)
      const ym = this.$moment().subtract(1,'months').endOf('month').format('YYYY-MM');
      return Promise.all([
        axios.get(`/api/clinic/withdarws?${qs}`),
        axios.get(`/api/clinic/withdarws/${ym}`)
      ]).then(([res1, res2]) => {
        this.withdraws = res1.data.withdraws.data
        this.pageInfo = {
          last_page: res1.data.withdraws.last_page,
        }
        this.current = res2.data.withdraw
      }).finally(() => {
        this.$store.dispatch('state/removeIsLoading')
      });
    },

    getHistoryData() {
      this.$store.dispatch('state/setIsLoading')
      const qs = this.$utils.getQueryString(this.query)
      axios.get(`/api/clinic/withdarws?${qs}`)
        .then(res => {
          this.withdraws = res.data.withdraws.data
        })
        .catch(error => {
        })
        .finally(() => {
          this.$store.dispatch('state/removeIsLoading')
        });
    },

    handlePaginate(pageNum) {
      this.query = {
        ...this.query,
        page: pageNum,
      }
      this.getHistoryData()
    },
    onProgress(progress) {
      // this.progress = progress;
      console.log(`PDF generation progress: ${progress}%`)
    },

    startPagination() {
      console.log(`PDF has started pagination`)
    },

    hasPaginated () {
      console.log(`PDF has been paginated`)
    },

    async beforeDownload ({ html2pdf, options, pdfContent }) {
      console.log(`On Before PDF Generation`)
    },

    hasDownloaded (blobPdf) {
      console.log(`PDF has downloaded yehey`)
      // this.pdfDownloaded = true
      // console.log(blobPdf)
    },
    domRendered() {
      console.log("Dom Has Rendered");
      // this.contentRendered = true;
    },

    onBlobGenerate(blob) {
      console.log(blob);
    },
    downloadPdf(value) {
      this.$store.dispatch('state/setIsLoading');
      this.month=value;
      this.controlValue.filename='billing('+value+')';
      const qs = this.$utils.getQueryString(this.query);

      return Promise.all([
        axios.get(`/api/clinic/pdfdownload?date=${value}`),
        axios.get(`/api/clinic/withdarws/${value}`)
      ]).then(([res1, res2]) => {
        this.payments = res1.data.payments;
        this.pdfcurrent = res2.data.withdraw;
         axios.get(`/api/clinic/pdfdownload?date=${value}`)
          .then(res => {
          })
          .catch(error => {
            this.$store.dispatch('state/removeIsLoading')
          })
      }).finally(() => {
        this.$refs.html2Pdf.generatePdf();
        this.$store.dispatch('state/removeIsLoading')
      });

      // axios.get(`/api/clinic/pdfdownload?date=${value}`)
      //   .then(res => {
      //     this.payments = res.data.payments;
      //     this.$store.dispatch('state/removeIsLoading')
      //   })
      //   .catch(error => {
      //     this.$store.dispatch('state/removeIsLoading')
      //   })
      // console.log(this.$refs.html2Pdf);

    },
  }
}
</script>

<style scoped>
</style>
