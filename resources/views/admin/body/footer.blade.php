<footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <p id="now" ></p> 
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Riyad Mohammed Salem
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>


<script>
   const now = new Date();
   const FullDate =  now.toLocaleTimeString("en-us", {
    day: "numeric",
    month: "short",
    hour: "2-digit",
    minute: "2-digit",
  }); 
  const Year = now.getFullYear();

document.querySelector('#now').innerText = `${FullDate} | ${Year} © Upcube.`;
</script>