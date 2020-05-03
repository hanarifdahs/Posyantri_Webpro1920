
<footer class="page-footer font-small special-color-dark pt-4">
  <div class="footer-copyright text-center py-3">Ayo ke Posyandu! 
  </div>
</footer>
    <!--<script src="<?=base_url()?>assets/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" language="javascript" type="text/javascript"></script>-->
    <!--<script>window.jQuery || document.write("<script src='../../assets/js/vendor/jquery-slim.min.js' type='text/javascript'></script>");</script>-->
    <!--<script src="<?=base_url()?>assets/js/vendor/jquery-slim.min.js" type="text/javascript"></script>-->
    <script src="<?=base_url()?>assets/js/jquery-3.2.1.slim.min.js" language="javascript" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/popper.min.js" language="javascript" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js" language="javascript" type="text/javascript"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?=base_url()?>assets/js/holder.min.js" language="javascript" type="text/javascript"></script>
    <?php if ($this->session->flashdata('flash')) : ?>
      <script type="text/javascript"> $('#status').modal('show'); </script>
    <?php endif; ?>
</body>
</html>