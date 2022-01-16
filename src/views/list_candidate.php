<section class="container mt-5">
    <div class="row">
    <div class="d-flex justify-content-center">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col" class="text-uppercase">Num</th>
                <th scope="col" class="text-uppercase">ID</th>
                <th scope="col" class="text-uppercase">Nom</th>
                <th scope="col" class="text-uppercase">Partie</th>
            </tr>
        </thead>

        <tbody>
        
    <?php  
      $i = 1;
      foreach ($data as $el) {
        print <<<EOT
           <tr>
             <th scope="row">$i</th>
             <td class="text-uppercase">{$el["candidate_id"]}</td>
             <td class="text-uppercase">{$el["candidate_name"]}</td>
             <td class="text-uppercase">{$el["candidate_party"]}</td>
           </tr>
EOT;
        $i++;
      }

    ?>
     
        </tbody>
    </table>
</div>
    </div>
</section>