$(document).ready(function(){
	// $("#tb_peserta").DataTable();
	// alert("hai");
});

$("#sl_provinsi").change(function(){
	$.get('../p/peripheral/get_kota',{'id':$(this).val()},
		function(data){
			$("#sl_kota").empty();
			$("#sl_kota").append("<option value='0' selected>Pilih Kota</option>");
			$("#sl_kota").append(data);
		}
	);
});

// SIMPAN DATA
$("#bt_simpan").click(function(){
	if(validated()){
		// Loading
		$(this).empty().append("<i class='fa fa-spinner fa-pulse fa-spin fa-2x fa-fw'></i>Menyimpan...").prop('disabled', true);
		$(":reset").prop('disabled',true);
		$("input, textarea, select").prop('readonly', true);
		
		$.ajax({
			type: 'POST',
			url: '../p/peserta/insert/',
			data: get_form_data(),
			success: function(result){
				notif("Proses Berhasil<br>Data telah berhasil disimpan", 1);
				$("#bt_simpan").empty().append("Simpan").prop('disabled', false);
				$(":reset").prop('disabled',false);
				$("input, textarea, select").prop('readonly', false);

				reset();
			},
			error: function(xhr, ajaxOption, thrownError){
				notif("Terjadi Kesalahan<br>Periksa kembali data anda.", 3);
				$("#bt_simpan").empty().append("Simpan").prop('disabled', false);
				$(":reset").prop('disabled',false);
				$("input, textarea, select").prop('readonly', false);
			}
		});
	}
});

// VALIDASI DATA KOSONG
function validated()
{
	var par = true;
	$("input[required], textarea").each(function(){
		if($(this).val()==''){
			$(this).css('border-color','red');
			par = false;
		}else{
			$(this).css('border-color','grey');
		}
	});

	$("select").each(function(){
		if($(this).val()=='0' || $(this).val()==''){
			$(this).css('border-color','red');
			par = false;
		}else{
			$(this).css('border-color','grey');
		}
	});
	return par;
}

// Ambil data
function get_form_data()
{
	var data = {};
    $.each($("form").serializeArray(),
      function(i, field){
        data[field.name] = field.value;
    });
    return data;
}


//Reset
function reset()
{
	$("input,textarea").val("");
	$("select option[value='0']").prop('selected', true);
	$("input,textarea").css('border-color','grey');
	$("#sl_kota").empty().append("<option value='0' selected>Pilih Kota</option>");
}

//Cheat
$("#cheat").click(function(){
	$("input").val("LOL");
	$("textarea").html("LOL");
});