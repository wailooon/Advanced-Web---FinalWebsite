  


$( function() {
      var todayDate= new Date();
      var maxDate = new Date();
      var dataFormat = "dd/mm/yy",
      checkin = $( "#check-in" ).datepicker({
          showAnim:"slideDown",
          dateFormat:"dd/mm/yy",
          defaultDate:"+1w",
          changeMonth:true,
          showButtonPanel: true,
          numberOfMonths:2,
          minDate:todayDate,
      })
      .on("change",function(){
          checkout.datepicker( "option", "minDate", getData(this) );
      }),
    checkout = $( "#check-out" ).datepicker({
          showAnim:"slideDown",
          dateFormat:"dd/mm/yy",  
          defaultDate:"+1w",
          changeMonth:true,
          showButtonPanel: true,
          numberOfMonths:2
      })
      .on("change",function(){
          checkin.datepicker( "option", todayDate, getData(this) );
      });

      function getData(element){
        var date;
        try{
            date = $.datepicker.parseDate( dataFormat, element.value);
        }catch(error){
            date = null;
        }
        return date;
        }
      });