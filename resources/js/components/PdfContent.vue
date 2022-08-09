<template>
  <section class="pdf-content pdfbody" style="background-color: white;">
    <div class="title">
       請求書
    </div>
    <div class="underline"></div>
    <div class="date">
      {{past_month | formatDateWithOutDay}}
    </div>
    <div class="payment">
      <div>
          <div>
            <p class="payment-ttl">{{ past_month.split("-")[1].replace(/0/g, '') }}月請求金額</p>
              <div>
                <strong>{{ current.total | currency }}</strong>
              </div>
          </div>
          <div>
            <p class="payment-ttl">{{ past_month.split("-")[1].replace(/0/g, '')  }}月払い戻し金額</p>
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
    <table class="task-list" style="margin-top:10px">
      <thead>
        <tr>
          <th>{{ $t('氏名') }}</th>
          <th>{{ $t('診断日時') }}</th>
          <th>{{ $t('予約内容') }}</th>
          <th>{{ $t('担当者') }}</th>
          <th>{{ $t('利用ポイント') }}</th>
          <th>{{ $t('支払い金額') }}</th>
        </tr>
      </thead>
      <tbody v-if="payments.length > 0">
        <tr class="history-list" v-for="payment in payments" :key="payment.id">
          <td>
          {{ payment.reservation.patient.kana }}
          </td>
          <td>{{ payment.reservation.visit_date | formatDateWithDay }}
              <br>
              {{ payment.reservation.start_time | formatTime }}
          </td>
          <td>{{ payment.reservation.hope_treat ? hope_treat_types[payment.reservation.hope_treat] : '' }}</td>
          <td>{{ payment.reservation.doctor ? payment.reservation.doctor.kata_name : '' }}</td>
          <td>{{ payment.reservation.use_point.toLocaleString() }}</td>
          <td>{{ payment.treat_price | currency }}</td>
        </tr>
      </tbody>
    </table>
  </section>
</template>

<script>
import axios from 'axios'
import { mapGetters } from 'vuex'

export default {
  middleware: 'auth',
  props:{
    payments:[],
    past_month:'',
    current:{}
  },
  computed: {
    ...mapGetters({
      hope_treat_types: 'constant/hope_treat_types',
    }),
  },
}
</script>
