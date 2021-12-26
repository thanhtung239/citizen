$('#txtProvince').on('change', function () {
  var provinceId = $(this).val();
  // alert(provinceId);
  $.ajax({
    method: "GET",
    url: "/provinces-district/" + provinceId,
    data: provinceId,
    success : function(response){
      // console.log(response);
      $('#txtDistrict').html(response);
      // alert(response);
    },
    error : function(response) {
      // alert("/provinces-district/" + provinceId);
    }
  });
});

$('#txtDistrict').on('change', function () {
  var districtId = $(this).val();
  $.ajax({
    method: "GET",
    url: "/provinces-districts-ward/" + districtId,
    data: districtId,
    success : function(response){
      console.log(response);
      $('#txtWard').html(response);
      // alert(response);
    },
    error : function(response) {
      // alert(0);
      // alert("/provinces-district/" + districtId);
    }
  });
});

$('#btnApprove').on('click', function () {
  $.ajax({
    method: "GET",
    url: "/approve-provinces",
    data: 0,
    success : function(response){
      // console.log(response);
      // alert(response);
      $('#btnApprove').text(response);
      // alert(response);
    },
    error : function(response) {
      // alert(0);
    }
  });
})