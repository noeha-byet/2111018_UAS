<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tes</title>
</head>
<body>
    <h1>tes</h1>


    <form action="<?= base_url('admin/galeri/upload') ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="userfile" id="userfile"><br>
        <input type="text" name='deskripsi' placeholder='deskripsi'>

        <button type="submit">upload</button>
    </form>

    <hr>

    <?php 
         foreach ($galeri as $foto):
    ?>
    <img src="<?= base_url('uploads/galeri/'.$foto->gambar) ?>" alt="" width="300">
    <p><?= $foto->gambar ?></p>
    <p><?= $foto->deskripsi ?></p><br>
    <a href="<?= base_url('admin/galeri/hapusFile/'.$foto->id_galeri) ?>" onclick="return confirm('Are you sure want to delete this photo?')">Hapus</a>
    <?php endforeach; ?>

    <!-- <img src="<?= base_url(); ?>uploads/galeri/item-240709-254f6d8b48.png" alt=""> -->

    
</body>
</html>