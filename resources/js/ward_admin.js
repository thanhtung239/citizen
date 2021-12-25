$('#txtProvince').on('change', function () {
  var provinceId = $(this).val();
  // alert(provinceId);
  $.ajax({
    method: "GET",
    url: "http://127.0.0.1:8000/provinces-district/" + provinceId,
    data: provinceId,
    success : function(response){
      // console.log(response);
      $('#txtDistrict').html(response);
      // alert(response);
    },
    error : function(response) {
      // alert("http://127.0.0.1:8000/provinces-district/" + provinceId);
    }
  });
});

$('#txtDistrict').on('change', function () {
  var districtId = $(this).val();
  // alert(provinceId);
  $.ajax({
    method: "GET",
    url: "http://127.0.0.1:8000/provinces-districts-ward/" + districtId,
    data: districtId,
    success : function(response){
      // console.log(response);
      $('#txtWard').html(response);
      // alert(response);
    },
    error : function(response) {
      // alert(0);
      // alert("http://127.0.0.1:8000/provinces-district/" + districtId);
    }
  });
});