
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Absensi')
   @section('judulhalaman', 'Edit Absensi Pegawai')

   @section('konten')




	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
        <div style="border-style: groove; border-radius : 25px;  padding-left : 50px; padding-right : 50px;  margin-bottom : 30px">
        <div class="form-group">
            <input  type="hidden" name="id" value="{{ $a->ID }}">
            IDPegawai <select class="form-control" name="idpegawai" >
                @foreach($pegawai as $p)
                 <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                @endforeach
            </select>
            <br>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                        <div  class='col-sm-4 input-group date ' id='dtpickerdemo'>
                            <input class="form-control" type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function() {
                            $('#dtpickerdemo').datetimepicker({
                                format: 'YYYY-MM-DD hh:mm:ss',
                                showTodayButton: false,
                                locale : 'id',
                                "defaultDate": new Date(),
                            });
                        });
                    </script>

                    Status <br />
                    <input type="radio" id="html" name="status" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
                    <label for="html">Izin</label><br>
                    <input type="radio" id="css" name="status" value="S"  @if ($a->Status === "S" ) checked="checked" @endif>
                    <label for="css">Sakit</label><br>
                    <input type="radio" id="javascript" name="status" value="A"  @if ($a->Status === "A" ) checked="checked" @endif>
                    <label for="javascript">Alpha</label>
            <p><input type="submit" value="Simpan Data" class="btn btn-success"></p>
        </div>
        </form>
        </div>

	@endforeach

   <p> <a class="btn btn-warning" href="/absen"> Kembali</a></p>
   @endsection
