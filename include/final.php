				<div class="ui equal width grid segment">
					<div class="equal width row">
						<div class="column">
							<h3 class="header">Data Kelengkapan Lainnya</h3>
							<h5 class="ui horizontal divider">Informasi Surat</h5>	
							<div class="required disabled field">
								<label>Tanggal Surat</label>
								<input class="disenter" type="text" name="tgl-surat" placeholder="Tanggal Surat" value="<?=date("d F Y")?>">
							</div>
							<div class="required field">
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

							<h5 class="ui horizontal divider">Detail Pernikahan</h5>
							<div class="required field">
								<label>Mas Kawin</label>
								<textarea rows="2" name="mas-kawin" style="resize: none;" placeholder="Mas Kawin"></textarea>
							</div>
							<div class="required field">
								<label>Bayar Mas Kawin</label>
								<select class="ui search dropdown disenter" name="bayar-maskawin">
									<option value="">Bayar Maskawin</option>
									<option value="Tunai">Tunai</option>
							    	<option value="Hutang">Hutang</option>
							     </select>
							</div>
							<div class="fields">
								<div class="required seven wide field ui calender" id="datepicker9">
									<label>Tanggal Pernikahan</label>
									<input class="disenter" type="text" name="tgl-nikah" placeholder="Tanggal Pernikahan">
								</div>
								<div class="required six wide field ui calender" id="timepicker1">
									<label>Jam Pernikahan</label>
									<input class="disenter" type="text" name="jam-nikah" placeholder="Jam Pernikahan">
								</div>
								<div class="required three wide field">
									<label>Waktu Bagian</label>
									<select class="ui search dropdown disenter" name="waktu-bagian">
										<option value="">Waktu Bagian</option>
										<option value="WIB">WIB</option>
								    	<option value="WITA">WITA</option>
								    	<option value="WIT">WIT</option>
							     	</select>
								</div>
							</div>
							<div class="required field">
								<label>Tempat</label>
								<textarea rows="2" name="tmp-nikah" style="resize: none;" placeholder="Tempat"></textarea>
							</div>
						</div>
					</div>
				</div>