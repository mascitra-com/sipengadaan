<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Peserta Lelang</h4>
                        <p class="category">Pengelolaan data peserta lelang</p>
                    </div>
                    <div class="content">
                        <!-- KONTEN DISINI -->
                         <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped" id="tb_peserta">
                                <thead>
                                    <th><i class="fa fa-circle"></i></th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Facebook</th>
                                    <th>Telpon</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="fa fa-circle text-success"></td>
                                        <td>1</td>
                                        <td>Ainul Yaqin</td>
                                        <td><a href="">Ainul Yakin</a></td>
                                        <td>+6285746568731</td>
                                        <td>
                                            <button id="" class="btn btn-xs"><i class="fa fa-info"></i></button>
                                            <button id="" class="btn btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button id="" class="btn btn-xs"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- FOOTER WINDOWS -->
                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-success"></i> Oke
                                <i class="fa fa-circle text-danger"></i> Blocked
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <!-- FORM -->
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title">FORM USER</h4>
                        <p class="category">Tambah User Baru</p>
                        <hr>
                    </div>
                    <div class="content">
                        <form>
                        <!-- Nama lengkap -->
                            <div class="form-group">
                                <label>Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                            </div>
                        <!--Facebook-->
                            <div class="form-group">
                                <label>Facebook <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="facebook" placeholder="Nama Facebook" required>
                            </div>
                        <!--URL Facebook-->
                            <div class="form-group">
                                <label>URL Facebook <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3">facebook.com/</span>
                                    <input type="text" class="form-control" name="url_facebook" placeholder="URL Facebook" required>
                                </div>
                            </div>
                        <!--Alamat-->
                            <div class="form-group">
                                <label>Alamat <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="alamat" placeholder="Alamat" required></textarea>
                            </div>
                        <!--Provinsi-->
                            <div class="form-group">
                                <label>Provinsi <span class="text-danger">*</span></label>
                                <select name="provinsi" class="form-control" id="sl_provinsi">
                                    <option value="0" selected>Pilih provinsi</option>
                                    <?php foreach($provinsi as $data): ?>
                                    <option value="<?=$data['provinsi_id']?>"><?=$data['provinsi_nama']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <!--Kota-->
                            <div class="form-group">
                                <label>Kota<span class="text-danger">*</span></label>
                                <select name="kota_id" class="form-control" id="sl_kota">
                                    <option value="" selected>Pilih kota</option>
                                </select>
                            </div>
                        <!--Kodepos-->
                            <div class="form-group">
                                <label>Kode Pos <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" maxlength="5" name="kode_pos" placeholder="Kodepos" required>
                            </div>
                        <!--Telpon-->
                            <div class="form-group">
                                <label>Telpon <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3">+62</span>
                                    <input type="text" class="form-control" maxlength="12" name="telpon" placeholder="Nomor Telpon" required>
                                </div>
                            </div>
                        <!--Telpon Alt-->
                            <div class="form-group">
                                <label>Telpon (alternatif)</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3">+62</span>
                                    <input type="text" class="form-control" maxlength="12" name="telpon_alt" placeholder="Nomor telpon alternatif">
                                </div>
                            </div>
                        <!--Email-->
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" maxlength="30" name="email" placeholder="Alamat email" required>
                            </div>
                        <!--Button-->
                            <div class="form-group">
                                <button class="btn btn-info btn-fill btn-block" id="bt_simpan" type="button">Simpan</button>
                                <button class="btn btn-warning btn-fill btn-block" onclick="reset()" type="button">Batal</button>
                            </div>
                        </form>
                        <div class="footer">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-asterisk text-danger"></i><b style="color:black">Wajib diisi</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>