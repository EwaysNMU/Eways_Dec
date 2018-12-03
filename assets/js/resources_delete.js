function deleteResource(a)
{
   var msj='Are you sure you want to delete this resource?';
   if (!confirm(msj)) { 
      return false;
   } else {
     var resourceID = a.id;
    jQuery.ajax({
                type: "POST",
                url: "http://sict-iis.nmmu.ac.za/eways/index.php/admin/delete_resources/" + resourceID,
                dataType: 'json',
                cache:false,
                success: function (res) {
                    if (res)
                    {
                         window.location.replace("http://sict-iis.nmmu.ac.za/eways/index.php/admin/resources");
                        var getInput_delete = "Resource Deleted!";
                        localStorage.setItem("r_deleted",getInput_delete);
                    }
                }

            });
   }
    
}

