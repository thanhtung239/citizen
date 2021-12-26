window.onload = function () {
  var MFchart = new CanvasJS.Chart("MFChart", {
    animationEnabled: true,
    legend: {
      cursor: "pointer",
      itemclick: explodePie
    },
    data: [{
      type: "doughnut",
      innerRadius: 60,

      showInLegend: true,
      toolTipContent: "<b>{name}</b>: {y} Người (#percent%)",
      indexLabel: "{name} - #percent%",
      dataPoints: [
        { y: 15000, name: "Nam" },
        { y: 15000, name: "Nữ" },
      ]
    }]
  });


  var AgeChart = new CanvasJS.Chart("AgeChart", {
    animationEnabled: true,
    axisX: {
      interval: 1
    },
    axisY: {
      includeZero: true,
    },
    data: [{
      type: "bar",
      toolTipContent: "<b>{label}</b><br>Số người:{y} Người<br>{persent}% Dân số",
      dataPoints: [
        { label: "0-20", y: 1000, persent: 5.8, url: "israel.png" },
        { label: "20-40", y: 4000, persent: 2.0, url: "australia.png" },
        { label: "40-60", y: 6000, persent: 1.2, url: "germany.png" },
        { label: "60-80", y: 8000, persent: 1.9, url: "uk.png" },
        { label: "80-90", y: 9000, persent: 2.5, url: "india.png" },
        { label: ">90", y: 10000, persent: 5.3, url: "russia.png" },
      ]
    }]
  });

  var EduChart = new CanvasJS.Chart("EduChart", {
    animationEnabled: true,
    theme: "light2",
    title: {
      text: "Trình độ văn hóa"
    },
    axisY: {
      title: "Số người"
    },
    axisX: {
      title: "Trình độ"
    },

    data: [{
      type: "column",

      axisY: {
        title: "Số người"
      },
      dataPoints: [
        { y: 1000, label: "Tiểu học" },
        { y: 2000, label: "Trung học" },
        { y: 3000, label: "Phổ thông" },
        { y: 4000, label: "Đại học" },
      ]
    }]
  });


  var ProportionChart = new CanvasJS.Chart("ProportionChart", {
    animationEnabled: true,
    data: [{
      type: "pie",
      showInLegend: true,
      toolTipContent: "{name}: <strong>{y}%</strong>",
      indexLabel: "{name} - {y}%",
      dataPoints: [
        { y: 20, name: "Trước độ tuổi lao động" },
        { y: 60, name: "Trong độ tuổi lao động" },
        { y: 20, name: "Sau độ tuổi lao động" }
      ]
    }]
  });



  AgeChart.render();
  MFchart.render();
  EduChart.render();
  ProportionChart.render();

  function explodePie(e) {
    if (typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
      e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
    } else {
      e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
    }
    e.chart.render();
  }

  var totalRegistedPeople = $('#dash_num1').attr('total-register-people');
  var totalRegistedPeopleToday = $('#dash_num2').attr('total-register-people-today');
  var totalMale = $('#dash_num3').attr('total-male');
  var totalFemale = $('#dash_num4').attr('total-female');


  animateValue(document.getElementById("dash_num1"), 0, totalRegistedPeople, 1000);
  animateValue(document.getElementById("dash_num2"), 0, totalRegistedPeopleToday, 1000);
  animateValue(document.getElementById("dash_num3"), 0, totalMale, 1000);
  animateValue(document.getElementById("dash_num4"), 0, totalFemale, 1000);

  function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }
}
