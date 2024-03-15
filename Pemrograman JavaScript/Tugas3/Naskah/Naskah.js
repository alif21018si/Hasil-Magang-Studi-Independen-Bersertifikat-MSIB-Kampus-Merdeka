function tampilkanData() {
    let nama = document.getElementById('nama').value;
    let pekerjaan = document.getElementById('pekerjaan').value;
    let hobi = document.getElementById('hobby').value;

    let hasil = document.getElementById('hasil');

    if (nama && pekerjaan && hobby) {
        hasil.innerHTML = `
            <h2>Informasi Pengguna:</h2>
            <p><strong>Nama:</strong> ${nama}</p>
            <p><strong>Pekerjaan:</strong> ${pekerjaan}</p>
            <p><strong>Hobby:</strong> ${hobby}</p>
        `;
    } else {
        hasil.innerHTML = "<p>*Silakan selesaikan pengisian semua kolom isian dengan kata pengisian.</p>";
    }
    
}

