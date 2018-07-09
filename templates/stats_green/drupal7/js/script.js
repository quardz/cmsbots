
/*--------------------------------------------------------------------------*/
/*------------  Begins : Stats / stats green  ------------------------------*/
/*--------------------------------------------------------------------------*/
/* CSS from jquery-asProgress.js library*/
 $('.progress').asProgress({
            'namespace': 'progress',
            'speed' : '80',
            'labelCallback': function(n) {
                      var percentage = this.getPercentage(n);
                      $(this.element).next().text(percentage+ " %");
            },
        });
        
        
        $('.progress').asProgress('start');
/*--------------------------------------------------------------------------*/
/*--------------  Ends : Stats / stats green  ------------------------------*/
/*--------------------------------------------------------------------------*/
