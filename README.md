# PHPCrawller
Versão 0.1

Crawller feito em PHP para passar por sites e buscar a informações que quiser por meio das TAGs.

Basta utilizar está estrutura: 

foreach($html->find('<Insira qual TAG do HTML desejar>') as $e)
$arrayx[] =  $e->innertext . '<br>';

Nela você busca o valor da TAG escolhida e salva no arryax.

Ainda não está salvando no banco.

Por boa pratica, meus planos não são de salvar as imagens dentro do banco e sim buscar dentro da TAG <img> qual o "src=" dela, não tendo que gravar arquivos de imagem no banco, apenas strings.

