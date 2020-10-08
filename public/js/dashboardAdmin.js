
  // $(document).on('ready', function () {
  //   // initialization of chartjs
  //   var updatingChartDatasets = [
  //     [
  //       [18,51,60,38,88,50,40,52,88,80,60,70],
  //       [27,38,60,77,40,50,49,29,42,27,42,50]
  //     ],
  //     [
  //       [77,40,50,49,27,38,60,42,50,29,42,27],
  //       [60,38,18,51,88,50,40,52,60,70,88,80]
  //     ]
  //   ]

  //   // initialization of chartjs
  //   var updatingLineChart = $.HSCore.components.HSChartJS.init($('#updatingLineChart'), {
  //     data: {
  //       datasets: [
  //         {
  //           data: updatingChartDatasets[0][0]
  //         },
  //         {
  //           data: updatingChartDatasets[0][1]
  //         }
  //       ]
  //     }
  //   });

    // Call when tab is clicked
    $('[data-toggle="chart"]').click(function(e) {
      let keyDataset = $(e.currentTarget).attr('data-datasets')

      // Update datasets for chart
      updatingLineChart.data.datasets.forEach(function(dataset, key) {
        dataset.data = updatingChartDatasets[keyDataset][key];
      });
      updatingLineChart.update();
    });

  