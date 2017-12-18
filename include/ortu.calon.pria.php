					<h3 class="header">Orangtua Calon Mempelai Pria</h4>
					<h5 class="ui horizontal divider">Data Ayah Mempelai Pria</h5>	
					<div class="field">
						<label>Nomor Kartu Tanda Penduduk</label>
						<input class="disenter" type="number" name="ayah-pria-ktp" placeholder="Nomor Kartu Tanda Penduduk">
					</div>
					<div class="field">
						<label>Nama</label>
						<input class="disenter" type="text" name="ayah-pria-nama" placeholder="Nama">
					</div>
					<div class="fields">
						<div class="four wide field">
							<label>Tempat Lahir</label>
							<input class="disenter" type="text" name="ayah-pria-tmp_lahir" placeholder="Tempat Lahir">
						</div>
						<div class="twelve wide field ui calender" id="datepicker3">
							<label>Tanggal Lahir</label>
							<input class="disenter" type="text" name="ayah-pria-tgl_lahir" placeholder="Tanggal Lahir">
						</div>
					</div>
					<div class="field">
						<label>Kewarganegaraan</label>
						<select class="ui search dropdown disenter" name="ayah-pria-wn" id="ayah-pria-pilih-wn">
							<option value="">Kewarganegaraan</option>
							<option value="Indonesia">Indonesia</option>
					    	<option value="Asing">Asing</option>
					  	</select>
					</div>
					<div class="field" id="ayah-pria-asing">
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
					<div class="field">
						<label>Agama</label>
						<select class="ui search dropdown disenter" name="ayah-pria-agama" id="ayah-pria-pilih-agama">
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
					<div class="field" id="ayah-pria-kepercayaan">
						<label>Nama Penghayat Kepercayaan</label>
						<input class="disenter" type="text" name="ayah-pria-kepercayaan" placeholder="Nama Penghayat Kepercayaan">
					</div>
					<div class="field">
						<label>Tempat tinggal</label>
						<textarea rows="2" name="ayah-pria-tmp_tinggal" style="resize: none;" placeholder="Tempat Tinggal"></textarea>
					</div>


					
					<h5 class="ui horizontal divider">Data Ibu Mempelai Pria</h5>	
					<div class="field">
						<label>Nomor Kartu Tanda Penduduk</label>
						<input class="disenter" type="number" name="ibu-pria-ktp" placeholder="Nomor Kartu Tanda Penduduk">
					</div>
					<div class="field">
						<label>Nama</label>
						<input class="disenter" type="text" name="ibu-pria-nama" placeholder="Nama">
					</div>
					<div class="fields">
						<div class="four wide field">
							<label>Tempat Lahir</label>
							<input class="disenter" type="text" name="ibu-pria-tmp_lahir" placeholder="Tempat Lahir">
						</div>
						<div class="twelve wide field ui calender" id="datepicker4">
							<label>Tanggal Lahir</label>
							<input class="disenter" type="text" name="ibu-pria-tgl_lahir" placeholder="Tanggal Lahir">
						</div>
					</div>
					<div class="field">
						<label>Kewarganegaraan</label>
						<select class="ui search dropdown disenter" name="ibu-pria-wn" id="ibu-pria-pilih-wn">
							<option value="">Kewarganegaraan</option>
							<option value="Indonesia">Indonesia</option>
					    	<option value="Asing">Asing</option>
					  	</select>
					</div>
					<div class="field" id="ibu-pria-asing">
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
					<div class="field">
						<label>Agama</label>
						<select class="ui search dropdown disenter" name="ibu-pria-agama" id="ibu-pria-pilih-agama">
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
					<div class="field" id="ibu-pria-kepercayaan">
						<label>Nama Penghayat Kepercayaan</label>
						<input class="disenter" type="text" name="ibu-pria-kepercayaan" placeholder="Nama Penghayat Kepercayaan">
					</div>
					<div class="field">
						<label>Tempat tinggal</label>
						<textarea rows="2" name="ibu-pria-tmp_tinggal" style="resize: none;" placeholder="Tempat Tinggal"></textarea>
					</div>