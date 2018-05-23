
    var currentdateTime = new Date();
    var deltaDate = new Date();
    var startTime = new Date();
    var endTime = new Date();
    var startTimeFormated = formatDates(startTime);
    deltaDate.setDate(deltaDate.getDate() - 2);

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    };

    function randomDate(start, end) {
        return new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime()));
    };

    function formatDates(currentdate) {
        var addZero = function(i) {
            return i < 10 ? i = "0" + i : i;
        }

        return addZero(currentdate.getDate()) + "-"
                + addZero((currentdate.getMonth()+1))  + "-" 
                + currentdate.getFullYear() + " "  
                + addZero(currentdate.getHours()) + ":"  
                + addZero(currentdate.getMinutes()) + ":" 
                + addZero(currentdate.getSeconds());
    };

    var nowDateString = formatDates(currentdateTime);


    var mas=[];
function updateMobileTable(){
 

 if ($(this).attr('class')==undefined && $('.visible-sm').css('display') != 'none') {

      var firstTd    = $('.visible-sm tbody tr').first().find('td:nth-child(1)'),
          lastTd     = $('.visible-sm tbody tr').first().find('td:nth-child(7)'),
          trNotFirst = $('.visible-sm tbody tr:not(:first)');

} else if ($('.visible-sm').css('display') != 'none' && mas.indexOf($(this).parent().next().attr('id'))==-1 ){
      var self= $(this);
         firstTd    = $(this).parent().next().find('tbody tr:first td:nth-child(1)'),
         lastTd     = $(this).parent().next().find('tbody tr:first td:nth-child(7)'),
         trNotFirst = $(this).parent().next().find('tbody tr:not(:first)');
      mas.push($(this).parent().next().attr('id'));

 } else { return }
   
             firstTd.text(formatDates(currentdateTime));
         var deltaStartSec         = currentdateTime.getSeconds()-getRandomInt(120, 3000),
             startTimeSec          = currentdateTime.setSeconds(deltaStartSec),
             startTimeDef          = new Date(startTimeSec),
             startTimeFormated     = formatDates(startTimeDef);
             lastTd.text(startTimeFormated);
             firstTd.empty().append(formatDates(endTime));

         trNotFirst.each(function(){

         var prevTd     = $(this).prev().find('td:nth-child(1)').text(),
             ar         = prevTd.split(' ')[0],
             prevY      = ar.split('-')[2],
             prevM      = ar.split('-')[1]-1,
             prevD      = ar.split('-')[0];
             if (prevTd.split(' ')[1] != undefined) {
                var prevH      = prevTd.split(' ')[1].split(':')[0],
                    prevMin    = prevTd.split(' ')[1].split(':')[1],
                    prevS      = prevTd.split(' ')[1].split(':')[2]
             }
             
             prevTime   = new Date(prevY, prevM, prevD, prevH, prevMin, prevS),
             start_time = new Date(prevTime.setSeconds(prevTime.getSeconds()-getRandomInt(240*60, 480*60)));
         
         $(this).find('td:nth-child(1)').text(formatDates(prevTime));

         var deltaStartSec      = prevTime.getSeconds()-getRandomInt(120, 3000),
             startTimeSec       = prevTime.setSeconds(deltaStartSec),
             startTimeDef       = new Date(startTimeSec),
             startTimeFormated  = formatDates(startTimeDef);

         $(this).find('td:nth-child(7)').text(startTimeFormated);      
      })
      
   };


   function updateDesktopTable(nTd, sData, oData, iRow) {
        if (iRow==0){
         
         $(nTd).text(formatDates(currentdateTime));
         var deltaStartSec      = currentdateTime.getSeconds()-getRandomInt(120, 3000),
             startTimeSec       = currentdateTime.setSeconds(deltaStartSec),
             startTimeDef       = new Date(startTimeSec),
             startTimeFormated  = formatDates(startTimeDef);
         $(nTd).parent().find('td:nth-child(7)').text(startTimeFormated);

        } else {

         var prevTd= $(nTd).parent().prev().find('td:nth-child(1)').text();
         var ar= prevTd.split(' ')[0];
         var prevY=ar.split('-')[2],
             prevM=ar.split('-')[1]-1,
             prevD=ar.split('-')[0],
             prevH=prevTd.split(' ')[1].split(':')[0],
             prevMin=prevTd.split(' ')[1].split(':')[1],
             prevS=prevTd.split(' ')[1].split(':')[2],
             prevTime=new Date(prevY, prevM, prevD, prevH, prevMin, prevS);
         
         var start_time=new Date(prevTime.setSeconds(prevTime.getSeconds()-getRandomInt(240*60, 480*60)));
     
         $(nTd).parent().find('td:nth-child(1)').text(formatDates(prevTime));

         var deltaStartSec=prevTime.getSeconds()-getRandomInt(120, 3000),
             startTimeSec= prevTime.setSeconds(deltaStartSec),
             startTimeDef=new Date(startTimeSec),
             startTimeFormated= formatDates(startTimeDef);
         $(nTd).parent().find('td:nth-child(7)').text(startTimeFormated);      
        }
      };