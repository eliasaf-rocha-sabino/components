<?php

function renderLayout($titulo, $conteudo, $passosLog, $rotaAtual){
    $activeProdutos = $rotaAtual === 'produtos' ? 'active' : '';
    $activeMarcas   = $rotaAtual === 'marcas'   ? 'active' : '';

    echo '<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . htmlspecialchars($titulo) . ' - Loja de Cosméticos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="logo">💄 Glow Cosméticos</div>
        <nav>
            <a href="index.php?rota=produtos" class="' . $activeProdutos . '">Produtos</a>
            <a href="index.php?rota=marcas" class="' . $activeMarcas . '">Marcas</a>
        </nav>
    </header>

    <main class="container">
        <section class="conteudo">
            <h2>' . htmlspecialchars($titulo) . '</h2>
            ' . $conteudo . '
        </section>

        <aside class="sidebar">
            <h3>⚙️ Fluxo MVC</h3>
            <div class="log">';

    foreach ($passosLog as $passo) {
        echo '<div class="log-item">' . htmlspecialchars($passo) . '</div>';
    }

    echo '      </div>
            <div class="rota-atual">Rota atual: <code>/' . htmlspecialchars($rotaAtual) . '</code></div>
        </aside>
    </main>

    <footer>
        <p>Sistema MVC em PHP &copy; ' . date('Y') . ' — Loja de Cosméticos</p>
    </footer>

</body>
</html>';
}