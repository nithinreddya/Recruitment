<script>
function f(str)
{
  alert ("Pressing Ok will close the request. Are you sure closing it");
  if(str=="1")
  {
    window.location='p_status.php';
  }
  else if(str=="2")
  {
    window.location='m_status.php';
  }
  else if(str=="3")
  {
    window.location='man_status.php';
  }
  else if(str=="4")
  {
    window.location='j_status.php';
  }
}

</script>
