					<h3 class="header">Calon Mempelai Pria</h4>
					<h5 class="ui horizontal divider">Data Pribadi</h5>	
					<div class="field">
						<label>Nomor Kartu Tanda Penduduk</label>
						<input class="disenter" type="number" name="pria-ktp" placeholder="Nomor Kartu Tanda Penduduk">
					</div>
					<div class="field">
						<label>Nama</label>
						<input class="disenter" type="text" name="pria-nama" placeholder="Nama">
					</div>
					<div class="fields">
						<div class="four wide field">
							<label>Tempat Lahir</label>
							<input class="disenter" type="text" name="pria-tmp_lahir" placeholder="Tempat Lahir">
						</div>
						<div class="twelve wide field ui calender" id="datepicker1">
							<label>Tanggal Lahir</label>
							<input class="disenter" type="text" name="pria-tgl_lahir" placeholder="Tanggal Lahir">
						</div>
					</div>
					<div class="field">
						<label>Kewarganegaraan</label>
						<select class="ui search dropdown disenter" name="pria-wn" id="pria-pilih-wn">
							<option value="">Kewarganegaraan</option>
							<option value="Indonesia">Indonesia</option>
					    	<option value="Asing">Asing</option>
					  	</select>
					</div>
					<div class="field" id="pria-asing">
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
						<label>Suku Bangsa</label>
						<input type="text" class="disenter" name="pria-suku" placeholder="Suku Bangsa">
					</div>
					<div class="field">
						<label>Agama</label>
						<select class="ui search dropdown disenter" name="pria-agama" id="pria-pilih-agama">
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
					<div class="field" id="pria-kepercayaan">
						<label>Nama Penghayat Kepercayaan</label>
						<input class="disenter" type="text" name="pria-kepercayaan" placeholder="Nama Penghayat Kepercayaan">
					</div>
					<div class="field">
						<label>Pendidikan Terakhir</label>
						<select class="ui search dropdown disenter" name="pria-pendidikan">
							<option value="">Pendidikan Terakhir</option>
							<option value="SD">SD</option>
					    	<option value="SMP">SMP</option>
					      	<option value="SMA">SMA</option>
					      	<option value="Penguruan Tinggi">Penguruan Tinggi</option>
					  	</select>
					</div>
					<div class="field">
						<label>Tempat tinggal</label>
						<textarea rows="2" name="pria-tmp_tinggal" style="resize: none;" placeholder="Tempat Tinggal"></textarea>
					</div>
					<div class="field" id="pria-status">
						<label>Status Perkawinan</label>
						<select class="ui search dropdown disenter" name="pria-status">
							<option value="">Status Perkawinan</option>
							<option value="Jejaka">Jejaka</option>
					    	<option value="Duda">Duda</option>
					      	<option value="Beristri">Beristri</option>
					  	</select>
					</div>
					<div id="pria-mantan">
						<h5 class="ui horizontal divider">Data Istri Terdahulu</h5>
						<div class="field">
							<label>Nama Istri Terdahulu (Jika Duda)</label>
							<!-- <input type="text" name="istri-terdahulu"> -->
							<select name="istri-terdahulu" multiple="" class="ui search fluid dropdown disenter" placeholder="Nama Istri Terdahulu"></select>
						</div>
					</div>
					<div id="pria-istri">
						<div class="ui horizontal divider">Jumlah Istri</div>
						<div class="field">
							<label>Jumlah Istri (Jika Sedang Beristri)</label>
							<input class="disenter" type="number" name="pria-jml_istri" placeholder="Jumlah Istri">
						</div>
					</div>