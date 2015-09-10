var gjavailabilitydata = google.visualization.arrayToDataTable(jsonData['Guidelines']);

       var gjavailabilityoptions = {
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent'
      };

      var gjavailability = new google.visualization.BarChart(document.getElementById('gjavailability'));
      gjavailability.draw(gjavailabilitydata, gjavailabilityoptions);

       function resizegjavailability () {
      
       
           gjavailability.draw(gjavailabilitydata, gjavailabilityoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizegjavailability, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizegjavailability);
    }