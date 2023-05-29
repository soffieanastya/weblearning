function show(nomor){
	$.ajax({
		url  : 'soal/pertanyaan',
		type : 'POST',
		dataType : 'html',
		data : 'show='+nomor,

		success : function(jawaban){
			$('#show').html(jawaban);
		},
	})
}