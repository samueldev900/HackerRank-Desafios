<pre>
    <?php
    
    $usuarios = [
        'id' => 1,
        'nome' => 'João Silva',
        'email' => 'joao.silva@example.com',
        'idade' => 28,
        'cidade' => 'São Paulo',
        'ativo' => true
    
    ];

    print_r($usuarios);
    
    foreach($usuarios as $key => $value){
        echo $key ." -- " . $value . "\n";
    }
    ?>
</pre>
