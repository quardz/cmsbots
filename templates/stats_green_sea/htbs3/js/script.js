 
/*--------------------------------------------------------------------------*/
/*------------  Begins : Stats / stats green sea ---------------------------*/
/*--------------------------------------------------------------------------*/
/* CSS from jquery-asProgress.js library*/ 
$('.progress').asProgress({
            'namespace': 'progress',
            'labelCallback': function(n) {
                      var percentage = this.getPercentage(n);
                      $(this.element).children('.stat-running-number').text(percentage+ "% ");
                      
            },
        }).asProgress('start'); 
/*--------------------------------------------------------------------------*/
/*--------------  Ends : Stats / stats green sea ---------------------------*/
/*--------------------------------------------------------------------------*/		
	