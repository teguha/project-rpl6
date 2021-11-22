$(document).on('click','.send_form', function(){
    var input_blanter = document.getElementById('No_Hp');
    
    /* Whatsapp Settings */
    var walink = 'https://web.whatsapp.com/send',
        phone = '6281977094280',
        walink2 = 'Halo saya ingin memesan ',
        text_yes = 'Terkirim.',
        text_no = 'Isi semua Formulir lalu klik Send.';
    
    /* Smartphone Support */
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    var walink = 'whatsapp://send';
    }
    
    if("" != input_blanter.value){
    
     /* Call Input Form */
    
    var input_name = $("#name").val(),
        input_No_Hp = $("#No_Hp").val(),
        input_gender = $("#gender").val(),
        input_product = $("#product").val(),
        input_product2 = $("#product2").val(),
        input_alamat_kab = $("#alamat_kab").val(),
        input_jalan = $("#jalan").val();
    
    /* Final Whatsapp URL */
    var blanter_whatsapp = walink + '?phone=' + phone + '&text=' + walink2 + '%0A%0A' +
        '*Name* : ' + input_name + '%0A' +
        '*No Hp* : ' + input_No_Hp + '%0A' +
        '*Jenis Kelamin* : ' + input_gender + '%0A' +
        '*Jenis Paket* : ' + input_product + '%0A' +
        '*Kategori Paket* : ' + input_product2 + '%0A' +
        '*Alamat Kabupaten* : ' + input_alamat_kab + '%0A',
        '*Jalan* : ' + input_jalan + '%0A';

    
    /* Whatsapp Window Open */
    window.open(blanter_whatsapp,'_blank');
    document.getElementById("text-info").innerHTML = '<span class="yes">'+text_yes+'</span>';
    } else {
    document.getElementById("text-info").innerHTML = '<span class="no">'+text_no+'</span>';
    }
    });