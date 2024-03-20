!(function (a) {
  "use strict";
  a(function () {
    if (a("#bar").length) {
      var e = a("#bar").get(0).getContext("2d");
      e.height = 20;
      new Chart(e, {
        type: "bar",
        data: {
          labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          datasets: [
            {
              label: "Revenue",
              backgroundColor: "#1ccab8",
              borderColor: "transparent",
              borderWidth: 2,
              categoryPercentage: 0.5,
              hoverBackgroundColor: "#00d8c2",
              hoverBorderColor: "transparent",
              data: [30, 39, 20, 31, 41, 25, 20, 39, 20, 31, 41, 25],
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: { display: !1, labels: { fontColor: "#50649c" } },
          tooltips: {
            enabled: !0,
            callbacks: {
              label: function (e, a) {
                return (
                  a.datasets[e.datasetIndex].label + " $ " + e.yLabel + "k"
                );
              },
            },
          },
          scales: {
            xAxes: [
              {
                barPercentage: 0.35,
                categoryPercentage: 0.4,
                display: !0,
                gridLines: {
                  color: "transparent",
                  borderDash: [0],
                  zeroLineColor: "transparent",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2],
                },
                ticks: { fontColor: "#a4abc5", beginAtZero: !0, padding: 12 },
              },
            ],
            yAxes: [
              {
                gridLines: {
                  color: "#8997bd29",
                  borderDash: [3],
                  drawBorder: !1,
                  drawTicks: !1,
                  zeroLineColor: "#8997bd29",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2],
                },
                ticks: {
                  fontColor: "#a4abc5",
                  beginAtZero: !0,
                  padding: 12,
                  callback: function (e) {
                    if (!(e % 10)) return "$" + e + "k";
                  },
                },
              },
            ],
          },
        },
      });
    }
  });
})(jQuery),
// $('#world-map-markers').vectorMap({map: 'asia_merc'});
$('#world-map-markers').vectorMap({
    map: 'in_mill',
    backgroundColor: "transparent",
    scaleColors: ["#eff0f1", "#eff0f1"],
      normalizeFunction: "polynomial",
    hoverOpacity: 0.7,
    hoverColor: !1,
    regionStyle: { initial: { fill: "#7474b126" } },
    markers: [
        { latLng: [23.6102, 85.2799], name: "Jharkhand" },
        { latLng: [22.2587, 71.1924], name: "Gujarat" },
        { latLng: [25.0961, 85.3131], name: "Bihar" },
        { latLng: [30.7333, 76.7794], name: "Chandigarh" },
    ],
    series: {
        regions: [
        {
            values: {
            JH: "black",
            CH: "#868ff363",
            GJ: "#868ff363",
            BR: "#868ff363",
            },
            attribute: "fill",
        },
        ],
        markerStyle: {
            initial: { stroke: "#7474b126" },
            hover: { stroke: "rgba(112, 112, 112, 0.30)" },
        },
        markers: [
            {
                latLng: [23.6102, 85.2799], 
                name: "Jharkhand",
                style: { fill: "#f93b7a" },
            },
            {
                latLng:  [22.2587, 71.1924], 
                name: "Gujarat",
                style: { fill: "#0aafff" },
            },
            {
                latLng: [25.0961, 85.3131], 
                name: "Bihar",
                style: { fill: "#7551e9" },
            },
            {
                latLng: [30.7333, 76.7794], 
                name: "Chandigarh",
                style: { fill: "#ffc212" },
            },
        ],
    }

});
// $("#world-map-markers").vectorMap({
//     map: "in_mill", // Specify the map for India
//     backgroundColor: "transparent",
//     markerStyle: {
//       initial: { stroke: "#7474b126" },
//       hover: { stroke: "rgba(112, 112, 112, 0.30)" },
//     },
//     markers: [
//       {
//         latLng: [20.59, 78.96],
//         name: "India",
//         style: { fill: "#f93b7a" }, // Change the fill color for the marker in India
//       },
//     ],
// });  
// $("#world-map-markers").vectorMap({
//     map: "world_mill_en",
//     scaleColors: ["#eff0f1", "#eff0f1"],
//     normalizeFunction: "polynomial",
//     hoverOpacity: 0.7,
//     hoverColor: !1,
//     regionStyle: { initial: { fill: "#7474b126" } },
//     markers: [
//         { latLng: [55.75, 37.62], name: "Russia" },
//         { latLng: [-25.27, 133.77], name: "Australia" },
//         { latLng: [20.59, 78.96], name: "India" },
//         { latLng: [39.52, -87.12], name: "Brazil" },
//     ],
//     series: {
//         regions: [
//         {
//             values: {
//             US: "#868ff363",
//             AU: "#868ff363",
//             BR: "#868ff363",
//             RU: "#868ff363",
//             },
//             attribute: "fill",
//         },
//         ],
//     },
//     markerStyle: {
//         initial: { stroke: "#7474b126" },
//         hover: { stroke: "rgba(112, 112, 112, 0.30)" },
//     },
//     backgroundColor: "transparent",
//     markers: [
//         {
//         latLng: [37.09024, -95.712891],
//         name: "USA",
//         style: { fill: "#f93b7a" },
//         },
//         {
//         latLng: [55.754093, 37.620407],
//         name: "Russia",
//         style: { fill: "#0aafff" },
//         },
//         {
//         latLng: [-21.943369, 123.102198],
//         name: "Australia",
//         style: { fill: "#7551e9" },
//         },
//         {
//         latLng: [-11.409874, -41.280857],
//         name: "Brazil",
//         style: { fill: "#ffc212" },
//         },
//     ],
// });
jQuery(function (e) {
  "use strict";
  var o = window.AdminoxAdmin || {};
  if (e("#platform_type_dates_donut").length) {
    echarts
      .init(document.getElementById("platform_type_dates_donut"))
      .setOption({
        timeline: {
          show: !1,
          data: ["06-16", "05-16", "04-16"],
          label: {
            formatter: function (e) {
              return e ? e.slice(0, 5) : null;
            },
          },
          x: 10,
          y: null,
          x2: 10,
          y2: 0,
          width: 10,
          height: 50,
          backgroundColor: "rgba(0,0,0)",
          borderColor: "#eaeaea",
          borderWidth: 0,
          padding: 5,
          controlPosition: "left",
          autoPlay: !0,
          loop: !1,
          playInterval: 2e3,
          lineStyle: { width: 1, color: "#000", type: "" },
        },
        options: [
          {
            color: ["#7c3a84", "#a769af", "#cf8dd7", "#d995e1"],
            title: { text: "", subtext: "" },
            tooltip: {
              trigger: "item",
              formatter: "{b} : {c}",
            },
            legend: {
              show: !1,
              x: "left",
              orient: "vertical",
              padding: 0,
              data: ["General Practioner", "Diabetologist", "Dermatologist", "Pulmonology"],
            },
            toolbox: {
              show: !0,
              color: ["#bdbdbd", "#bdbdbd", "#bdbdbd", "#bdbdbd"],
              feature: {
                mark: { show: !1 },
                dataView: { show: !1, readOnly: !0 },
                magicType: {
                  show: !0,
                  type: ["pie", "funnel"],
                  option: {
                    funnel: {
                      x: "10%",
                      width: "80%",
                      funnelAlign: "center",
                      max: 50,
                    },
                    pie: { roseType: "none" },
                  },
                },
                restore: { show: !1 },
                saveAsImage: { show: 0 },
              },
            },
            series: [
              {
                name: "06-16",
                type: "pie",
                radius: [20, "80%"],
                roseType: "none",
                center: ["50%", "45%"],
                width: "40%",
                itemStyle: {
                  normal: { label: { show: !1 }, labelLine: { show: !0 } },
                  emphasis: { label: { show: !1 }, labelLine: { show: !1 } },
                },
                data: [
                  { value: 3598, name: "General Practioner" },
                  { value: 2769, name: "Diabetologist" },
                  { value: 2074, name: "Dermatologist" },
                  { value: 1559, name: "Pulmonology" },
                //   { value: 1000, name: "Others" },
                ],
              },
            ],
          },
        //   {
        //     series: [
        //       {
        //         name: "05-16",
        //         type: "pie",
        //         data: [
        //           { value: 42, name: "iPhone 7" },
        //           { value: 51, name: "Windows" },
        //           { value: 39, name: "Desktop" },
        //           { value: 25, name: "Mobiles" },
        //           { value: 9, name: "Others" },
        //         ],
        //       },
        //     ],
        //   },
        //   {
        //     series: [
        //       {
        //         name: "04-16",
        //         type: "pie",
        //         data: [
        //           { value: 29, name: "iPhone 7" },
        //           { value: 16, name: "Windows" },
        //           { value: 24, name: "Desktop" },
        //           { value: 19, name: "Mobiles" },
        //           { value: 5, name: "Others" },
        //         ],
        //       },
        //     ],
        //   },
        ],
      });
  }
  e(window).on("load", function () {});
});
!(function (a) {
  "use strict";
  if (a("#page_views").length) {
    var r = a("#page_views").get(0).getContext("2d");
    new Chart(r, {
      type: "bar",
      data: {
        labels: [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday",
        ],
        datasets: [
          {
            backgroundColor: [
              "#E4E9EC",
              "#E4E9EC",
              "#E4E9EC",
              " #64C5B1",
              "#E4E9EC",
              "#E4E9EC",
              "#E4E9EC",
            ],
            data: [15, 20, 25, 30, 25, 20, 15],
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        title: { display: !1 },
        tooltips: { intersect: !1, mode: "nearest" },
        legend: { display: !1 },
        responsive: !0,
        maintainAspectRatio: !1,
        barRadius: 2,
        scales: {
          xAxes: [
            {
              barThickness: 5,
              display: !1,
              gridLines: !1,
              ticks: { beginAtZero: !0 },
            },
          ],
          yAxes: [{ display: !1, gridLines: !1, ticks: { beginAtZero: !0 } }],
        },
        layout: { padding: { left: 0, right: 0, top: 0, bottom: 0 } },
      },
    });
  }
})(jQuery);
