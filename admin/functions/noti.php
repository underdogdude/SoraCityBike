<?php 

    /*
     * Type
     *      Success     :       S
     *      Error       :       E
     * 
     * Page
     *      Category    :       PCAT
     *      Content     :       PCON
     * 
     * Sub-Page
     *      Create      :       SCE
     * 
     * Action
     *      Edit        :       AED
     *      Show        :       ASH
     * 
     */
     
    /*
     * Head
     *      Update Ordering Error Value             :       UOD       
     *     
     */

?>
<script type="text/javascript">

	$(document).ready(function() {
	    toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        
        // Content
        
        <?php if(!strcmp($_GET['noti'], 'SAddContent')){?>
          toastr["success"]("Create Success","Create New Content");
        <?php }?>
        <?php if(!strcmp($_GET['noti'], 'SUpdateContent')){?>
          toastr["success"]("Update Success","Update Content");
        <?php }?>
        <?php if(!strcmp($_GET['noti'], 'SDelContent')){?>
		  toastr["success"]("Delete Content Success","Delete Success");
		<?php }?>
		
		<?php if(!strcmp($_GET['noti'], 'SAddLang')){?>
          toastr["success"]("Create New Language","Create Success");
        <?php }?>
        <?php if(!strcmp($_GET['noti'], 'SDelLang')){?>
          toastr["success"]("Delete Language Success","Delete Success");
        <?php }?>
        <?php if(!strcmp($_GET['noti'], 'EDelLang')){?>
          toastr["success"]("Delete Language Success","Delete Error");
        <?php }?>
        
        <?php if(!strcmp($_GET['noti'], 'SSetLang')){?>
-          toastr["success"]("Set Success","Set Site Default Language");
-        <?php }?>
        
        <?php if(!strcmp($_GET['noti'], 'SDelMultiContent')){?>
          toastr["success"]("Delete Success", "Delete All Content");
        <?php }?>
		
		
		// Category
		
		<?php if(!strcmp($_GET['noti'], 'SAddCategory')){?>
          toastr["success"]("Create Category Success","Create Success");
        <?php }?>
		<?php if(!strcmp($_GET['noti'], 'SDelCategory')){?>
          toastr["success"]("Delete Category Success","Delete Success");
        <?php }?>
        <?php if(!strcmp($_GET['noti'], 'EDelCategory')){?>
          toastr["error"]("Error Delete Category","Delete Error");
        <?php }?>
        
        <?php if(!strcmp($_GET['noti'], 'SAddFav')){?>
          toastr["success"]("Add Favorite This Content Success","Add Success");
        <?php }?>
        <?php if(!strcmp($_GET['noti'], 'SDelFav')){?>
          toastr["success"]("Remove Favorite This Content Success","Remove Success");
        <?php }?>
        
        <?php if(!strcmp($_GET['noti'], 'SUpdateOrder')){?>
          toastr["success"]("Update Ordering Success","Update Success");
        <?php }?>
        
        // Slide
        <?php if(!strcmp($_GET['noti'], 'SAddSlide')){?>
          toastr["success"]("Create Slide Success","Create Success");
        <?php }?>
        <?php if(!strcmp($_GET['noti'], 'SUpdateSlide')){?>
          toastr["success"]("Update Slide Success","Update Success");
        <?php }?>
        <?php if(!strcmp($_GET['noti'], 'SDelSlide')){?>
          toastr["success"]("Delete Slide Success","Delete Success");
        <?php }?>
        
        //Footer
        <?php if(!strcmp($_GET['noti'], 'SAddFooter')){?>
          toastr["success"]("Create Footer Success","Create Success");
        <?php }?>
        <?php if(!strcmp($_GET['noti'], 'SDelFooter')){?>
          toastr["success"]("Delete Footer Success","Delete Success");
        <?php }?>
        
        //User
        <?php if(!strcmp($_GET['noti'], 'EDelUser')){?>
          toastr["error"]("Delete Error","Can't Delete User");
        <?php }?>
        <?php if(!strcmp($_GET['noti'], 'SUpdateUserEmail')){?>
          toastr["success"]("Update Success","Update New Email Success");
        <?php }?>
        
	}); 
	
</script>