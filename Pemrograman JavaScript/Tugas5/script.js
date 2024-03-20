$("document").ready(function(){
    $(".animal").mouseover(function(){
        // Mengambil ID suara berdasarkan ID div
        var soundID = $(this).attr('id').replace('div', 'sound');
        // Memainkan suara
        document.getElementById(soundID).play();
    });

    $(".animal").mouseout(function(){
        // Menghentikan suara saat mouse keluar dari gambar
        var soundID = $(this).attr('id').replace('div', 'sound');
        document.getElementById(soundID).pause();
        document.getElementById(soundID).currentTime = 0; // Mengembalikan suara ke awal
    });

    $("#div1").mouseover(function(){
        $(this).css({
            background : "url('https://asset-a.grid.id//crop/0x0:0x0/360x240/photo/2022/01/03/dog-g836c5b564_640-1jpg-20220103020839.jpg')"
        });
    });

    $("#div2").mouseover(function(){
        $(this).css({
            background : "url('https://assets-a1.kompasiana.com/items/album/2021/05/10/babi-ketawa-01-60989efa8ede48081f183ee2.jpg')"
        });
    });

    $("#div3").mouseover(function(){
        $(this).css({
            background : "url('https://www.dictio.id/uploads/db3342/original/3X/7/f/7f7ac383e87e4686ca614d297e8d7ec911452702.jpg')"
        });
    });
    $("div").mouseout(function(){
        $(this).css({
            background : "red"
        });
    });
});
