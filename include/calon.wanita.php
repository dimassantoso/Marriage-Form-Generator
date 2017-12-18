				<h3 class="header">Calon Mempelai Wanita</h4>
				<h5 class="ui horizontal divider">Data Pribadi</h5>
				<div class="field">
					<label>Nomor Kartu Tanda Penduduk</label>
					<input class="disenter" type="number" name="wanita-ktp" placeholder="Nomor Kartu Tanda Penduduk">
				</div>
				<div class="field">
					<label>Nama</label>
					<input class="disenter" type="text" name="wanita-nama" placeholder="Nama">
				</div>
				<div class="fields">
					<div class="four wide field">
						<label>Tempat Lahir</label>
						<input class="disenter" type="text" name="wanita-tmp_lahir" placeholder="Tempat Lahir">
					</div>
					<div class="twelve wide field ui calender" id="datepicker2">
						<label>Tanggal Lahir</label>
						<input class="disenter" type="text" name="wanita-tgl_lahir" placeholder="Tanggal Lahir">
					</div>
				</div>
				<div class="field">
					<label>Kewarganegaraan</label>
					<select class="ui search dropdown disenter" name="wanita-wn" id="wanita-pilih-wn">
						<option value="">Kewarganegaraan</option>
						<option value="Indonesia">Indonesia</option>
					   	<option value="Asing">Asing</option>
					</select>
				</div>
				<div class="field" id="wanita-asing">
					<label for="wna-negara">Negara (Jika Warga Negara Asing)</label>
				    <select class="ui search dropdown disenter" name="wanita-wna-negara">
					    	<option value="">Negara (Jika Warga Negara Asing)</option>
					      <?php 
					      	include 'list_negara.php';
					      	foreach ($listNegara as $negara) {?>
					      		<option value="<?=$negara?>"><?=$negara?></option>

					      <?php } ?>
					    </select>
				</div>
				<div class="field">
					<label>Suku Bangsa</label>
					<input class="disenter" type="text" name="wanita-suku" placeholder="Suku Bangsa">
				</div>
				<div class="field">
					<label>Agama</label>
					<select class="ui search dropdown disenter" name="wanita-agama" id="wanita-pilih-agama">
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
				<div class="field" id="wanita-kepercayaan">
					<label>Nama Penghayat Kepercayaan</label>
					<input class="disenter" type="text" name="wanita-kepercayaan" placeholder="Nama Penghayat Kepercayaan">
				</div>
				<div class="field">
					<label>Pendidikan Terakhir</label>
					<select class="ui search dropdown disenter" name="wanita-pendidikan" id="wanita-pilih-agama">
						<option value="">Pendidikan Terakhir</option>
						<option value="SD">SD</option>
					   	<option value="SMP">SMP</option>
					   	<option value="SMA">SMA</option>
					   	<option value="Penguruan Tinggi">Penguruan Tinggi</option>
					</select>
				</div>
				<div class="field">
					<label>Tempat tinggal</label>
					<textarea rows="2" name="wanita-tmp_tinggal" style="resize: none;" placeholder="Tempat Tinggal"></textarea>
				</div>
				<div class="field" id="wanita-status">
					<label>Status Perkawinan</label>
					<select class="ui search dropdown disenter" name="wanita-status">
						<option value="">Status Perkawinan</option>
						<option value="Perawan">Perawan</option>
				    	<option value="Janda">Janda</option>
				    </select>
				</div>
				<div id="wanita-mantan">
					<h5 class="ui horizontal divider">Data Suami Terdahulu</h5>
					<div class="field">
						<label>Nama Suami Terdahulu (Jika Janda)</label>
						<input class="disenter" type="text" name="suami-terdahulu" placeholder="Nama Suami Terdahulu">
					</div>
				</div>