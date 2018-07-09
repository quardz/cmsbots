  
/*--------------------------------------------------------------------------*/
/*------------  Begins : Stats / stats white   -----------------------------*/
/*--------------------------------------------------------------------------*/
/* CSS from jquery-asProgress.js library*/
        $('.stat-stats-white .pie_progress').asPieProgress({
           'size' : ($('.pie_progress').width() * 90 ) / 100 ,
           'namespace': 'pie_progress',
           numberCallback: function(n) {
            var percentage = this.getPercentage(n);
            $(this.element).next().children('.stat-running-number').text(percentage);
           
        },
        }).asPieProgress('start');
/*--------------------------------------------------------------------------*/
/*------------  End : Stats / stats white  ---------------------------------*/
/*--------------------------------------------------------------------------*/
