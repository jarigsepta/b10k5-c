      function tambah(idskill) {
        var skill = $("#skills-" + idskill).val();
        if (skill == "") {
          alert("Mohon Isi Skill !!!");
        } else {
          $.ajax({
            url: "tambah.php",
            type: 'post',
            data: "id=" + idskill + "&data=" + skill + "&tipe=skill",
            success: function (result) {
              location.reload(true);
            }
          });
        }
      }


      function aksi() {
        var nama = $("#nama").val();
        if (nama == "") {
          alert("Mohon isi Nama !!!");
        } else {
          $.ajax({
            url: "tambah.php",
            type: 'post',
            data: "tipe=users&data=" + nama,
            success: function (result) {
              location.reload(true);
            }
          });
        }
      }