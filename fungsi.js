function aturPerilakuBerdasarkanIPK() {
    const ipkInput = document.getElementById('ipk');
    const pilihanBeasiswaInput = document.getElementById('pilihan-beasiswa');
    const uploadBerkasInput = document.getElementById('syarat');
    var daftarButton = document.getElementById('btndaftar');

    let timeout;

    function perbaruiPerilaku() {
        clearTimeout(timeout);
        
        timeout = setTimeout(function() {

            const ipk = parseFloat(ipkInput.value);
    
            if (ipk < 3) {
                pilihanBeasiswaInput.disabled = true;
                uploadBerkasInput.disabled = true;
                daftarButton.setAttribute("disabled", "true");
            } else {
                pilihanBeasiswaInput.disabled = false;
                uploadBerkasInput.disabled = false;
                pilihanBeasiswaInput.focus();
                daftarButton.removeAttribute("disabled");
            }
        }, 1000);
    }

    // Menambahkan event listener untuk memantau perubahan nilai pada input IPK
    ipkInput.addEventListener('input', perbaruiPerilaku);

    // Memanggil fungsi untuk memperbarui perilaku berdasarkan nilai IPK awal
    perbaruiPerilaku();
}