				<h3 class="header">Orangtua Calon Mempelai Wanita</h3>
				<h5 class="ui horizontal divider">Data Ayah Mempelai Wanita</h5>
				<div class="required field">
					<label>Nomor Kartu Tanda Penduduk</label>
					<input class="disenter" type="number" name="ayah-wanita-ktp" placeholder="Nomor Kartu Tanda Penduduk">
				</div>
				<div class="required field">
					<label>Nama</label>
					<input class="disenter" type="text" name="ayah-wanita-nama" placeholder="Nama">
				</div>
				<div class="fields">
					<div class="required four wide field">
						<label>Tempat Lahir</label>
						<input class="disenter" type="text" name="ayah-wanita-tmp_lahir" placeholder="Tempat Lahir">
					</div>
					<div class="required twelve wide field ui calender" id="datepicker5">
						<label>Tanggal Lahir</label>
						<input class="disenter" type="text" name="ayah-wanita-tgl_lahir" placeholder="Tanggal Lahir">
					</div>
				</div>
				<div class="required field">
					<label>Kewarganegaraan</label>
					<select class="ui search dropdown disenter" name="ayah-wanita-wn" id="ayah-wanita-pilih-wn">
						<option value="">Kewarganegaraan</option>
						<option value="Indonesia">Indonesia</option>
					   	<option value="Asing">Asing</option>
				  	</select>
				</div>
				<div class="required field" id="ayah-wanita-asing">
					<label for="wna-negara">Negara (Jika Warga Negara Asing)</label>
				    <select class="ui search dropdown disenter" name="pria-wna-negara">
					    	<option value="">Negara (Jika Warga Negara Asing)</option>
					      <?php 
					      	include 'list_negara.php';
					      	foreach ($listNegara as $negara) {?>
					      		<option value="<?=$negara?>"><?=$negara?></option>

					      <?php } ?>
					    </select>
				</div>
				<div class="required field">
					<label>Agama</label>
					<select class="ui search dropdown disenter" name="ayah-wanita-agama" id="ayah-wanita-pilih-agama">
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
				<div class="required field" id="ayah-wanita-kepercayaan">
					<label>Nama Penghayat Kepercayaan</label>
					<input class="disenter" type="text" name="ayah-wanita-kepercayaan" placeholder="Nama Penghayat Kepercayaan">
				</div>
				<div class="required field">
					<label>Tempat tinggal</label>
					<textarea rows="2" name="ayah-wanita-tmp_tinggal" style="resize: none;" placeholder="Tempat Tinggal"></textarea>
				</div>



				<h5 class="ui horizontal divider">Data Ibu Mempelai Wanita</h5>
				<div class="required field">
					<label>Nomor Kartu Tanda Penduduk</label>
					<input class="disenter" type="number" name="ibu-wanita-ktp" placeholder="Nomor Kartu Tanda Penduduk">
				</div>
				<div class="required field">
					<label>Nama</label>
					<input class="disenter" type="text" name="ibu-wanita-nama" placeholder="Nama">
				</div>
				<div class="fields">
					<div class="required four wide field">
						<label>Tempat Lahir</label>
						<input class="disenter" type="text" name="ibu-wanita-tmp_lahir" placeholder="Tempat Lahir">
					</div>
					<div class="required twelve wide field ui calender" id="datepicker6">
						<label>Tanggal Lahir</label>
						<input class="disenter" type="text" name="ibu-wanita-tgl_lahir" placeholder="Tanggal Lahir">
					</div>
				</div>
				<div class="required field">
					<label>Kewarganegaraan</label>
					<select class="ui search dropdown disenter" name="ibu-wanita-wn" id="ibu-wanita-pilih-wn">
						<option value="">Kewarganegaraan</option>
						<option value="Indonesia">Indonesia</option>
					   	<option value="Asing">Asing</option>
				  	</select>
				</div>
				<div class="required field" id="ibu-wanita-asing">
					<label for="wna-negara">Negara (Jika Warga Negara Asing)</label>
				    <select class="ui search dropdown disenter" name="pria-wna-negara">
					    	<option value="">Negara (Jika Warga Negara Asing)</option>
					      <?php 
					      	include 'list_negara.php';
					      	foreach ($listNegara as $negara) {?>
					      		<option value="<?=$negara?>"><?=$negara?></option>

					      <?php } ?>
					    </select>
				</div>
				<div class="required field">
					<label>Agama</label>
					<select class="ui search dropdown disenter" name="ibu-wanita-agama" id="ibu-wanita-pilih-agama">
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
				<div class="required field" id="ibu-wanita-kepercayaan">
					<label>Nama Penghayat Kepercayaan</label>
					<input class="disenter" type="text" name="ibu-wanita-kepercayaan" placeholder="Nama Penghayat Kepercayaan">
				</div>
				<div class="required field">
					<label>Tempat tinggal</label>
					<textarea rows="2" name="ibu-wanita-tmp_tinggal" style="resize: none;" placeholder="Tempat Tinggal"></textarea>
				</div>