const IDRupiah = new Intl.NumberFormat("id-ID", {
    style: "currency",
    currency: "IDR",
});

let frm = document.getElementById("formulircetakPegawai");

let pilihanJabatan = ["Manager", "Asisten Manager", "Staff"];
let pilihJabatan = `<option value="" disabled selected>---Choose One---</option>`;
for (let i = 0; i < pilihanJabatan.length; i++) {
    pilihJabatan += `<option value="${pilihanJabatan[i]}">${pilihanJabatan[i]}</option>`;
}
frm.jabatan.innerHTML = pilihJabatan;

const result = () => {
    let nama = frm.nama.value;
    let jabatan = frm.jabatan.value;
    let status = frm.status.value;
    let gaji, tunjanganJabatan, bpjs, tunjanganKeluarga, totalGaji;

    if (jabatan == "Manager") {
        gaji = 15000000;
    } else if (jabatan == "Asisten Manager") {
        gaji = 10000000;
    } else {
        gaji = 5000000;
    }
    frm.gajiPokok.value = IDRupiah.format(gaji);

    tunjanganJabatan = 0.15 * gaji;
    bpjs = 0.2 * gaji;
    tunjanganKeluarga = status == "Sudah Kawin" ? 0.2 * gaji : 100000000;

    totalGaji = gaji + tunjanganJabatan + bpjs + tunjanganKeluarga;

    let tableResult = `
                    <thead bgcolor="b2b2b2">
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>Status Pegawai</th>
                        <th>Gaji Pokok</th>
                        <th>Tunjangan Jabatan</th>
                        <th>BPJS</th>
                        <th>Tunjangan Keluarga</th>
                    </thead>
                    <tbody align=center>
                        <td>${nama}</td>
                        <td>${jabatan}</td>
                        <td>${status}</td>
                        <td>${IDRupiah.format(gaji)}</td>
                        <td>${IDRupiah.format(tunjanganJabatan)}</td>
                        <td>${IDRupiah.format(bpjs)}</td>
                        <td>${IDRupiah.format(tunjanganKeluarga)}</td>
                    </tbody>
                    <tfoot align="center">
                        <th colspan=6 bgcolor="white">Total Gaji</th>
                        <td bgcolor="red"><font color="white">${IDRupiah.format(
                            totalGaji
                        )}</font></td>
                    </tfoot>`;

    document.getElementById("hasil").innerHTML = tableResult;
};