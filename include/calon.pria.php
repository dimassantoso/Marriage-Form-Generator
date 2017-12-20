					<h3 class="header">Calon Mempelai Pria</h3>
					<h5 class="ui horizontal divider">Data Pribadi</h5>	
					<div class="required field">
						<label>Nomor Kartu Tanda Penduduk</label>
						<input id="pria_ktp" class="disenter" type="number" name="pria-ktp" placeholder="Nomor Kartu Tanda Penduduk">
					</div>
					<div class="required field">
						<label>Nama</label>
						<input id="pria_nama" class="disenter" type="text" name="pria-nama" placeholder="Nama">
					</div>
					<div class="fields">
						<div class="required four wide field">
							<label>Tempat Lahir</label>
							<input id="pria_tmp_lahir" class="disenter" type="text" name="pria-tmp_lahir" placeholder="Tempat Lahir">
						</div>
						<div class="required twelve wide field ui calender" id="datepicker1">
							<label>Tanggal Lahir</label>
							<input id="pria_tgl_lahir" class="disenter" type="text" name="pria-tgl_lahir" placeholder="Tanggal Lahir">
						</div>
					</div>
					<div class="required field">
						<label>Kewarganegaraan</label>
						<select id="pria-pilih-wn" class="ui search dropdown disenter" name="pria-wn">
							<option value="">Kewarganegaraan</option>
							<option value="Indonesia">Indonesia</option>
					    	<option value="Asing">Asing</option>
					  	</select>
					</div>
					<div class="required field" id="pria-asing">
						<label for="wna-negara">Negara (Jika Warga Negara Asing)</label>
					    <select id="pria_wna" class="ui search dropdown disenter" name="pria-wna-negara">
					    	<option value="">Negara (Jika Warga Negara Asing)</option>
					      <?php 
					      	include 'list_negara.php';
					      	foreach ($listNegara as $negara) {?>
					      		<option value="<?=$negara?>"><?=$negara?></option>

					      <?php } ?>
					    </select>
					</div>
					<div class="required field">
						<label>Suku Bangsa</label>
						<input id="pria-suku" type="text" class="disenter" name="pria-suku" placeholder="Suku Bangsa">
					</div>
					<div class="required field">
						<label>Agama</label>
						<select id="pria-pilih-agama" class="ui search dropdown disenter" name="pria-agama">
							<option value="">Agama</option>
							<option value="Islam">Islam</option>
					    	<option value="Protestan">Protestan</option>
					      	<option value="Katolik">Katolik</option>
					      	<option value="Hindu">Hindu</option>
					      	<option value="Budha">Budha</option>
					      	<option value="Konghucu">Konghucu</option>
					      	<option value="Kepercayaan">Penghayat Kepercayaan</option>
						</select>
					</div>
					<div class="required field" id="pria-kepercayaan">
						<label>Nama Penghayat Kepercayaan</label>
						<input id="pria_kepercayaan" class="disenter" type="text" name="pria-kepercayaan" placeholder="Nama Penghayat Kepercayaan">
					</div>
					<div class="required field">
						<label>Pendidikan Terakhir</label>
						<select id="pria_pendidikan" class="ui search dropdown disenter" name="pria-pendidikan">
							<option value="">Pendidikan Terakhir</option>
							<option value="SD">SD</option>
					    	<option value="SMP">SMP</option>
					      	<option value="SMA">SMA</option>
					      	<option value="Penguruan Tinggi">Penguruan Tinggi</option>
					  	</select>
					</div>
					<div class="required field">
						<label>Tempat tinggal</label>
						<textarea id="pria_tmp_tinggal" rows="2" name="pria-tmp_tinggal" style="resize: none;" placeholder="Tempat Tinggal"></textarea>
					</div>

					<!-- <div class="required field">
						<label>Provinsi</label>
						<select class="ui search dropdown disenter" name="propinsi" id="propinsi">
							<option value="">Provinsi</option>
							<option value="Jawa Timur">Jawa Timur</option>
							<option value="Jawa Barat">Jawa Barat</option>
						</select>
					</div>
					<div class="required field" id="pilih_kabkota">
						<label>Kabupaten/Kota</label>
						<select class="ui search dropdown disenter" name="kabkota" id="kabkota">
						</select>
					</div>
					<div class="required field" id="pilih_kec">
						<label>Kecamatan</label>
						<select class="ui search dropdown disenter" name="kecamatan" id="kecamatan">
						</select>
					</div>
					<div class="required field" id="pilih_deskel">
						<label>Desa/Kelurahan</label>
						<select class="ui search dropdown disenter" name="deskel" id="deskel">
						</select>
					</div>
 -->
					<div class="required field" id="pria-status">
						<label>Status Perkawinan</label>
						<select id="pria_status" class="ui search dropdown disenter" name="pria-status">
							<option value="">Status Perkawinan</option>
							<option value="Jejaka">Jejaka</option>
					    	<option value="Duda">Duda</option>
					      	<option value="Beristri">Beristri</option>
					  	</select>
					</div>
					<div id="pria-mantan">
						<h5 class="ui horizontal divider">Data Istri Terdahulu</h5>
						<div class="required field">
							<label>Nama Istri Terdahulu (Tekan enter untuk menambahkan)</label>
							<!-- <input type="text" name="istri-terdahulu"> -->
							<select id="pria_istri_terdahulu" name="istri-terdahulu" multiple="" class="ui search fluid dropdown disenter" placeholder="Nama Istri Terdahulu"></select>
						</div>
					</div>
					<div id="pria-istri">
						<div class="ui horizontal divider">Jumlah Istri</div>
						<div class="required field">
							<label>Jumlah Istri (Tekan enter untuk menambahkan)</label>
							<input id="pria_jml_istri" class="disenter" type="number" name="pria-jml_istri" placeholder="Jumlah Istri">
						</div>
					</div>