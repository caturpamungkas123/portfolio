const hapus = $(".hapus").data("hapus");
if (hapus) {
  Swal.fire({
    position: "center",
    icon: "success",
    title: hapus,
    showConfirmButton: false,
    timer: 3000,
  });
}
const swal = $(".swal").data("swal");
if (swal) {
  Swal.fire({
    position: "center",
    icon: "success",
    title: swal,
    showConfirmButton: false,
    timer: 2000,
  });
}
// Hapus
$(".hapus").on("click", function (e) {
  // hentikan default href
  e.preventDefault();
  const href = $(this).attr("href");
  Swal.fire({
    title: "Apakah Anda Yakin?",
    text: "Akan Menghapus Data Ini..?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      // document.location.href = href
      document.location.href = href;
    }
  });
});

// BIODATA //////////////////
// edit
const biodata = $(".edit").data("edit");
if (biodata) {
  Swal.fire({
    position: "center",
    icon: "success",
    title: biodata,
    showConfirmButton: false,
    timer: 2000,
  });
}
