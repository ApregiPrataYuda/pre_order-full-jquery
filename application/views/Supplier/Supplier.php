<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><span class="badge badge-secondary"> JS Form</span></h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        </ol>
      </div>
    </div>
  </div>
</section>


<!--start view for user -->
<section class="content">
    <div id="flash" data-flash="<?= $this->session->flashdata('pesan') ?>">
      <div id="flasherr" data-flasherr="<?= $this->session->flashdata('error') ?>">
        <!-- Default box -->
        <div class="card">
          <div class="card-header" style="background-color:RGB(40, 178, 170);">
            <h3 class="card-title text-light">JS Form</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>



          
            <div class="card-body">
            <p id="head" class="font-italic text-danger"></p>
              <!-- <form id="formx"> -->
               <div class="row">
                <div class="col-md-4">
                  <table width="100%">
                  <input type="hidden" class="form-control"  name="supplierID " id="supplierID">
                    <label class="mt-1">Name Sup:</label>
                      <tr>
                        <input type="text" class="form-control" name="supplierName" id="supplierName" placeholder="supplierName" required>
                        <p id="p1" class="font-italic text-danger"></p>
                    </tr>

                    
                      <label class="mt-1" hidden>kode Sup:</label>
                      <tr>
                        <input type="hidden" class="form-control"  id="supplierKode" readonly>
                      </tr>
                  </table>
                </div>

                <div class="col-md-4">
                <table width="100%">
                <label class="mt-1">Email Sup:</label>
                      <tr>
                        <input type="text" class="form-control"  id="supplierEmail" placeholder="supplierEmail">
                        <p id="p2" class="font-italic text-danger"></p>
                    </tr>

                      <label class="mt-1">Notelp Sup:</label>
                      <tr>
                        <input type="text" class="form-control" id="supplierNotelp" placeholder="supplierNotelp">
                        <p id="p3" class="font-italic text-danger"></p>
                    </tr>
               </div>
               </table>
             </div>

             <div class="col-md-4">
                <table width="100%">
                <label class="mt-1">NoHp Sup:</label>
                      <tr>
                        <input type="text" class="form-control" id="supplierNohp" placeholder="supplierNohp">
                        <p id="p4" class="font-italic text-danger"></p>
                    </tr>

                      <label class="mt-1">Description Sup:</label>
                      <tr>
                        <textarea id="supplierDescription" cols="5" rows="3" class="form-control"></textarea>
                        <p id="p5" class="font-italic text-danger"></p>
                    </tr>

               </div>
               </table>
          </div>
          <div class="row auto-left">
            <div  class="col ml-3">
            <button type="submit" id="add_supp" class="btn btn-outline-secondary btn-sm"><i class="fa fa-save"></i> Save </button>
            <button type="reset" id="Reset" class="btn btn-outline-secondary btn-sm"><i class="fa fa-undo"></i> Reset </button>
        </div>
          </div>
          <!-- </form> -->
              </div>
            </div>
          </div>
  </section>
<!--start view for end -->

<section class="content">
<div class="card">
  <div class="card-body">
  <table class="table table-striped" id="sp_table">
                <thead>
                    <tr>
                        <th>Field 1</th>
                        <th>Field 2</th>
                        <th>Field 3</th>
                        <th>Field 4</th>
                        <th>Field 5</th>
                        <th>Field 6</th>
                        <th>Field 7</th>
                        <th>Field 8</th>
                    </tr>
                </thead>
                <tbody>
                <?php $this->load->view('Supplier/loaddata'); ?>
                </tbody>
            </table>
  </div>
</div>  
</section>


<script>
    $(document).ready(function(){
        $(document).on('click','#add_supp', function() {
            var nameSupp = $('#supplierName').val()
            var kodeSupp = $('#supplierKode').val()
            var emailSupp = $('#supplierEmail').val()
            var notelSupp = $('#supplierNotelp').val()
            var NohpSupp = $('#supplierNohp').val()
            var descSupp = $('#supplierDescription').val()


            // Initializing Variables With Regular Expressions
            var name_regex = /^[a-zA-Z]+$/;
            var email_regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var nohp_regex = /^(\+62|62)?[\s-]?0?8[1-9]{1}\d{1}[\s-]?\d{4}[\s-]?\d{2,5}$/;
            var number_regex = /^\d+$/;

            if (nameSupp.length == 0) {
            $('#head').text("* semua wajib di isi *"); // This Segment Displays The Validation Rule For All Fields
            $("#supplierName").focus();
            return false;

            }else if (!nameSupp.match(name_regex) || nameSupp.length == 0) {
                $('#p1').text("* For your name please use alphabets only *"); // This Segment Displays The Validation Rule For Name
                $("#supplierName").focus();
                return false;
            }

            else if (!emailSupp.match(email_regex) || emailSupp.length == 0) {
            $('#p2').text("* Please enter a valid email address *"); // This Segment Displays The Validation Rule For Email
            $("#supplierEmail").focus();
            return false;
            }

            else if (!notelSupp.match(number_regex) || notelSupp.length == 0) {
            $('#p3').text("* Please enter a valid no telephone *"); // This Segment Displays The Validation Rule For Email
            $("#supplierNotelp").focus();
            return false;
            }

            else if (!NohpSupp.match(nohp_regex) || NohpSupp.length == 0) {
            $('#p4').text("* Please enter a valid no Handphone *"); // This Segment Displays The Validation Rule For Email
            $("#supplierNohp").focus();
            return false;
            }

            else if (descSupp.length == 0) {
            $('#p5').text("* not A null *"); // This Segment Displays The Validation Rule For Email
            $("#supplierDescription").focus();
            return false;
            }
            else{
                $.ajax({
                type : 'POST',
                url : '<?= site_url('Supplier/Addprocess')?>',
                data :{
                      'add_supp' : true,
                      'supplierName' : nameSupp,
                      'supplierKode' : kodeSupp,
                      'supplierEmail' : emailSupp,
                      'supplierNotelp' : notelSupp,
                      'supplierNohp' : NohpSupp,
                      'supplierDescription' : descSupp
                },
                datatype:'json',
                success: function(result){
                  if (result.success == true) {
                    alert('Gagal');
                  }else{
                    Toastify({
                        text: "Saved Success",
                        duration: 3000
                        }).showToast();
                    $('#sp_table').load('<?= site_url('Supplier/load')?>', function(){
                    });
                    $( '#supplierName').val('').focus();
                    $( '#supplierKode').val('');
                    $( '#supplierEmail').val('');
                    $( '#supplierNotelp').val('');
                    $( '#supplierNohp').val('');
                    $( '#supplierDescription').val('');
                  }
                }
              })
            }
        })
    })
</script>