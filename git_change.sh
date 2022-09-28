git filter-branch --commit-filter '
        if [ "$GIT_COMMITTER_NAME" = "Ares" ];
        then
                GIT_COMMITTER_NAME="AsaiTadao";
                GIT_AUTHOR_NAME="AsaiTadao";
                GIT_COMMITTER_EMAIL="blackhole.rsb@gmail.com";
                GIT_AUTHOR_EMAIL="blackhole.rsb@gmail.com";
                git commit-tree "$@";
        else
                git commit-tree "$@";
        fi' HEAD