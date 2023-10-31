<?php

if( have_rows('page_builder', get_the_ID()) ){

	while ( have_rows('page_builder', get_the_ID()) ) : the_row();

        switch ( get_row_layout() ) {
            
            case 'banner_block':{
                include('page_builder/banner_block.php');
            } break;

              case 'about_me_block':{
                include('page_builder/about_me_block.php');
            } break;

              case 'my_project_block':{
                include('page_builder/my_project_block.php');
            } break;

              case 'my_skills_block':{
                include('page_builder/my_skills_block.php');
            } break;

              case 'contact_block':{
                include('page_builder/contact_block.php');
            }break;


            // 1 CRIAR O CASE DE TODOS OS BLOCOS
            // 2 CRIAR O ARQUIVO DENTRO DA PASTA PAGE BUILDER SEGUINDO MODELO DO BANNER
            // 3 PUXAR UM CAMPO DO BLOCO DAR ECHO E COLOCAR UM H2 COM O NOME DO BLOCO
            // 4 COLOCAR BLOCO NA "HOME"



            default:{
                the_content();
            } break;

        }            
        
    endwhile;
	
}

?>