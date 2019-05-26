<div class="col-xl-12" role="main">

    <div class="container-fluid col-lg-6">

        <div class="overflow-hidden mb-1">
            <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;"><strong class="font-weight-extra-bold">Hubungi</strong> Kami</h2>
        </div>
        <div class="overflow-hidden mb-4 pb-3">
            <p class="mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="400" style="animation-delay: 400ms;">Tanyakan pertanyaan apapun!</p>
        </div>

        <form  class="contact-form appear-animation animated fadeIn appear-animation-visible" 
        action="<?=base_url()?>Info/pesan" method="POST" data-appear-animation="fadeIn" data-appear-animation-delay="600" novalidate="novalidate" style="animation-delay: 600ms;">
        <?php echo $this->session->flashdata('msg')?>

            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label class="required font-weight-bold text-dark">Nama Lengkap</label>
                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="nama"  required>
                </div>
                <div class="form-group col-lg-6">
                    <label class="required font-weight-bold text-dark">Alamat email</label>
                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email"  required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col">
                    <label class="required font-weight-bold text-dark">Pesan</label>
                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" id="message" required></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <input type="submit" value="Kirim Pesan" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                </div>
            </div>
        </form>
    </div>

</div>