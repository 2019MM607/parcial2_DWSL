<div class="bg-white p-5 sticky top-0 left-0 right-0 shadow-lg flex justify-end gap-5">


    <div class="flex justify-start gap-5">
        <div class=" flex flex-col justify-start ">
            <span class=" text-purple-500 text-center ">
                <?php 
                    session_start();
                    echo $_SESSION['usuario'];
                ?>
            </span>
            
            <span class="bg-gray-300 text-center  rounded-full px-1 text-gray-500  text-sm">
                <?php 
                echo $_SESSION['rol'];  
                 ?>
            </span>
        </div>

        <img 
            src="https://img.europapress.es/fotoweb/fotonoticia_20220822164927_420.jpg" 
            alt="user" 
            srcset=""
            class="w-10 h-10 rounded-full" 
            style="object-fit: cover;"
        >
        <a href="../index.php"><i class="bi bi-box-arrow-left text-purple-500 text-lg font-bold"></i></a>
    </div>
    
</div>