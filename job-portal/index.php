<?php include "header.php"?>
<?php include 'config.php' ?>

        <!-- Page content -->
        <div class="content">
            <p>
                <!-- <a class="btn btn-primary" data-bs-toggle="collapse"
                href="#collapseExample" role="button" aria-expanded="false"
                aria-controls="collapseExample"> Link with href </a> -->
                <button
                    class="btn btn-primary"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseExample"
                    aria-expanded="false"
                    aria-controls="collapseExample">
                    Post Job
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="Company Name" class="form-label">Company Name</label>
                            <input
                                type="Text"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                name="cname">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPosition" class="form-label">Position</label>
                            <input type="text" class="form-control" id="exampleInputPosition" name="pos"></div>
                        <div class="mb-3">
                            <label for="JobDesc" class="form-label">Job Description</label>
                            <textarea name="" id="" cols="30" rows="10" class='form-control' name="Jdesc"></textarea></div>
                        <div class="mb-3">
                            <label for="Skills" class="form-label">Skills Required</label>
                            <input type="text" class="form-control" id="skills" name="skills"></div>
                            
                        <div class="mb-3">
                            <label for="CTC" class="form-label">CTC</label>
                            <input type="text" class="form-control" id="CTC" name="CTC"></div>

                        <button type="submit" class="btn btn-primary" name="job">Submit</button>
                    </form>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">CTC</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php

                    $sql="Select cname,position,CTC from jobs";
                    $result=mysqli_query($conn,$sql);
                    $i=0;
                    if($result->num_rows>0){
                        while($rows=$result->fetch_assoc()){
                            echo"
                            <tbody>

                    <tr>
                    
                    <td>".++$i."</td>
                    <td>".$rows['cname']."</td>
                    <td>".$rows['position']."</td>
                    <td>".$rows['CTC']."</td>
                    </tr>";


                    }}
                    else{
                        echo"";
                    }

                    ?>
                   
                </tbody>
            </table>
        </div>
        
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>

    </body>
</html>