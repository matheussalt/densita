<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.webp .banner {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/banner.webp')
}

.no-webp .banner {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/banner.jpg')
}

.webp .fue {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax_tecnica.webp')
}

.no-webp .fue {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax_tecnica.jpg')
}

.webp .agendar {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax_agende.webp')
}

.no-webp .agendar {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax_agende.jpg')
}

.webp .parallax-tecnologia {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax_tecnologias.webp')
}

.no-webp .parallax-tecnologia {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax_tecnologias.jpg')
}

@media screen and (min-width: 600px) {
  .webp .banner {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/banner@2x.webp')
  }

  .no-webp .banner {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/banner@2x.jpg')
  }

  .webp .fue {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax_tecnica@2x.webp')
  }

  .no-webp .fue {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax_tecnica@2x.jpg')
  }

  .webp .agendar {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax_agende@2x.webp')
  }

  .no-webp .agendar {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax_agende@2x.jpg')
  }

  .webp .parallax-tecnologia {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax_tecnologias@2x.webp')
  }

  .no-webp .parallax-tecnologia {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax_tecnologias@2x.jpg')
  }
}
</style>

<section class="banner">
  <div class="container">
    <div class="banner-txt" data-animar>
      <h1 class="title">DENSITÁ</h1>
      <h2>EXPERTISE MÉDICA <br />
        E TECNOLOGIA DE ALTO NÍVEL <br />
        PARA O TRATAMENTO CAPILAR</h2>
    </div>

    <button class="go-down">
      <svg width="32" height="32" viewBox="0 0 32 32">
        <use xlink:href="#arrow"></use>
      </svg>
    </button>
  </div>
</section>

<section class="sobre" id="sobre">
  <div class="sobre-img" data-animar>
    <picture>
      <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica.webp" type="image/webp"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica.jpg" type="image/jpg"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/clinica@2x.jpg" alt="Clínica Densitá">
    </picture>
  </div>

  <div class="sobre-txt" data-animar>
    <h2 class="title">a DENSITÁ</h2>
    <p>A Densitá - Medicina Capilar tem como missão oferecer um atendimento integral e de alto nível aos pacientes que
      sofrem com a queda de cabelo. Localizada em Campinas, região estratégica no Estado de São Paulo, a clínica conta
      com uma estrutura moderna, tecnologias de ponta e uma equipe multidisciplinar altamente especializada para
      oferecer o que há de melhor em Transplante Capilar e no tratamento clínico do couro cabeludo e dos cabelos .
    </p>
    <div class="social-media">
      <a href="https://instagram.com" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#instagram"></use>
        </svg>
      </a>

      <a href="https://facebook.com" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#facebook"></use>
        </svg>
      </a>

      <a href="https://youtube.com" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#youtube"></use>
        </svg>
      </a>
    </div>
  </div>
</section>

<section class="especialistas">
  <div class="especialistas-txt" data-animar>
    <h2 class="title">Os especialistas</h2>
    <p>À frente da Densitá estão os dermatologistas Dra. Elisangela Pegas (CRM-SP: 102.060 | RQE: 33.822) e Dr. Felipe
      Borba Calixto (CRM-SP: 135.312 | RQE 48.547). Os médicos são Membros da Sociedade Brasileira de Dermatologia
      (SBD), da Sociedade Brasileira de Cirurgia Dermatológica (SBCD) e da Associação Brasileira de Cirurgia da
      Restauração Capilar (ABCRC).
    </p>
  </div>

  <div class="especialista-item" data-animar>
    <picture>
      <source srcset="<?=get_template_directory_URI()?>/img/webp/elisangela.webp" type="image/webp"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/elisangela.jpg" type="image/jpg"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/elisangela@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/elisangela@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/elisangela@2x.jpg" alt="DRA. ELISANGELA PEGAS" />
    </picture>

    <div class="especialista-wrapper">
      <h3>DRA. ELISANGELA PEGAS<br />
        CRM-SP: 102.060 - RQE: 33.822</h3>

      <button class="ver-mais" data-href="14">Ver mais</button>
    </div>
  </div>

  <div class="especialista-item" data-animar>
    <picture>
      <source srcset="<?=get_template_directory_URI()?>/img/webp/felipe.webp" type="image/webp"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/felipe.jpg" type="image/jpg"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/felipe@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/felipe@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/felipe@2x.jpg" alt="DR. FELIPE BORBA CALIXTO" />
    </picture>

    <div class="especialista-wrapper">
      <h3>DR. FELIPE BORBA CALIXTO<br />
        CRM-SP: 135.312 - RQE 48.547</h3>

      <button class="ver-mais" data-href="17">Ver mais</button>
    </div>
  </div>
</section>

<section class="causas" id="causas">
  <div class="container">
    <h2 class="title" data-animar>AS CAUSAS DA QUEDA DE CABELO</h2>
    <p data-animar>Alopécia é o nome científico dado à queda capilar, que pode ser desencadeada por diversos fatores,
      internos e
      externos. OS fios de cabelos podem ser trocados diariamente, em um processo fisiológico e natural do ciclo
      capilar. No entanto, quando a quantidade de fios em queda é acima do normal, podendo ser notada nos ralos,
      travesseiros, escovas e roupas, é importante procurar a orientação de um médico dermatologista. De forma geral, as
      causas da queda capilar estão relacionadas à:</p>

    <div class="causas-wrapper">
      <div class="causa-item" data-animar>
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/hereditarios.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/hereditarios.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/hereditarios@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/hereditarios@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/hereditarios@2x.jpg" alt="FATORES HEREDITÁRIOS" />
        </picture>

        <h3>FATORES HEREDITÁRIOS</h3>
      </div>

      <div class="causa-item" data-animar>
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/hormonal.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/hormonal.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/hormonal@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/hormonal@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/hormonal@2x.jpg" alt="FATORES HORMONAIS" />
        </picture>

        <h3>FATORES HORMONAIS</h3>
      </div>

      <div class="causa-item" data-animar>
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/habitos.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/habitos.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/habitos@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/habitos@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/habitos@2x.jpg" alt="HÁBITOS DE VIDA" />
        </picture>

        <h3>HÁBITOS DE VIDA</h3>
      </div>

      <div class="causa-item" data-animar>
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/doencas_couro.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/doencas_couro.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/doencas_couro@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/doencas_couro@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/doencas_couro@2x.jpg"
            alt="DOENÇAS LOCALIZADAS NO COURO CABELUDO E NOS FIOS" />
        </picture>

        <h3>DOENÇAS LOCALIZADAS NO COURO CABELUDO E NOS FIOS</h3>
      </div>

      <div class="causa-item" data-animar>
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/doencas_acometimento.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/doencas_acometimento.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/doencas_acometimento@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/doencas_acometimento@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/doencas_acometimento@2x.jpg"
            alt="DOENÇAS DE ACOMETIMENTO SISTÊMICO " />
        </picture>

        <h3>DOENÇAS DE ACOMETIMENTO SISTÊMICO</h3>
      </div>

      <div class="causa-item" data-animar>
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/pontuais.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/pontuais.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/pontuais@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/pontuais@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/pontuais@2x.jpg" alt="OUTRAS CAUSAS PONTUAIS" />
        </picture>

        <h3>OUTRAS CAUSAS PONTUAIS</h3>
      </div>
    </div>

    <div class="causas-final">
      <svg width="32" height="32" viewBox="0 0 32 32" data-animar>
        <use xlink:href="#heart"></use>
      </svg>
      <p data-animar>A consulta com um dermatologista especializado é fundamental para esclarecer as causas da sua queda
        capilar e
        direcionar o melhor tratamento no seu caso.</p>
    </div>
  </div>
</section>

<section class="transplante" id="transplante">
  <div class="container">
    <h2 class="title" data-animar>O TRANSPLANTE CAPILAR</h2>
    <p data-animar>O Transplante Capilar é um dos métodos de tratamento mais eficazes (?) para devolver ao paciente o
      aspecto
      estético harmonioso, proporcionando o aumento da autoestima. A cirurgia consiste na retirada, uma a uma, das
      chamadas Unidades Foliculares (UF’s) - agrupamentos de 1 a 4 fios localizados na região posterior da cabeça - e na
      implantação dessas UF´s de forma minuciosa e estratégica nas áreas calvas do couro cabeludo.</p>
    <h3 data-animar>Pra quem é indicado?</h3>

    <div class="transplante-wrapper">
      <div class="transplante-item" data-animar>
        <div class="transplante-icon">
          <img src="<?=get_template_directory_URI()?>/img/rsc/indicacao1.png" alt="Transplante Capilar" />
        </div>

        <p>Homens e Mulheres que se incomodam com falhas ou áreas calvas no couro cabeludo, nas sobrancelhas ou na barba
        </p>
      </div>

      <div class="transplante-item" data-animar>
        <div class="transplante-icon">
          <img src="<?=get_template_directory_URI()?>/img/rsc/indicacao2.png" alt="Transplante Capilar" />
        </div>

        <p> Pacientes que tenham uma área doadora de cabelos suficiente para a redistribuição dos fios, sem causar
          falhas nos locais onde as Unidades Foliculares foram retiradas
        </p>
      </div>

      <div class="transplante-item" data-animar>
        <div class="transplante-icon">
          <img src="<?=get_template_directory_URI()?>/img/rsc/indicacao3.png" alt="Transplante Capilar" />
        </div>

        <p>Pacientes que sofrem com a alopécia androgenética ou outras doenças do couro cabeludo e que não obtiveram
          sucesso com o tratamento clínico
        </p>
      </div>

      <div class="transplante-item" data-animar>
        <div class="transplante-icon">
          <img src="<?=get_template_directory_URI()?>/img/rsc/indicacao4.png" alt="Transplante Capilar" />
        </div>

        <p>Pessoas que tiveram a perda definitiva de fios devido à acidentes, cirurgias, queimaduras ou traumas.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="fue">
  <div class="container">
    <h2 class="title" data-animar>TÉCNICA FUE - Follicular Unit Extration</h2>
    <p data-animar>A FUE é uma técnica moderna e minuciosa que permite a realização do Transplante Capilar através da
      coleta
      individualizada das Unidades Foliculares (UF’s). Neste método, as UF’s são retiradas uma a uma com o auxílio de um
      equipamento de ponta milimétrica. O método é considerado menos invasivo e proporciona resultados naturais,
      possibilitando ao paciente utilizar cortes de cabelo curtos sem a percepção de possíveis pequenas cicatrizes
      pontuadas.
    </p>
  </div>
</section>

<section class="beneficios">
  <div class="container">
    <h2 class="title" data-animar>FUE - VERSATILIDADE E BENEFÍCIOS QUE VÃO ALÉM</h2>

    <div class="beneficios-wrapper">
      <div class="beneficios-item" data-animar>
        <div class="beneficios-icon">
          <svg width="106.62" height="102.8" viewBox="0 0 106.62 102.8">
            <use xlink:href="#marca"></use>
          </svg>
        </div>

        <h3>Barba e Sobrancelha</h3>

        <p>A retirada de fios do couro cabeludo com a técnica FUE também pode ser eficaz para tratar barbas e/ou
          sobrancelhas que apresentam falhas.</p>
      </div>

      <div class="beneficios-item" data-animar>
        <div class="beneficios-icon">
          <svg width="106.62" height="102.8" viewBox="0 0 106.62 102.8">
            <use xlink:href="#marca"></use>
          </svg>
        </div>

        <h3>Correção de cicatrizes</h3>

        <p>A técnica FUE pode ser utilizada para camuflar cicatrizes. O objetivo desse procedimento é disfarçar a
          cicatriz, tornando-a menos evidente.</p>
      </div>

      <div class="beneficios-item" data-animar>
        <div class="beneficios-icon">
          <svg width="106.62" height="102.8" viewBox="0 0 106.62 102.8">
            <use xlink:href="#marca"></use>
          </svg>
        </div>

        <h3>Body Hair</h3>

        <p>Consiste na retirada de Unidades Foliculares (UF’s) de outras áreas do corpo em pacientes que possuem área
          doadora insuficiente no couro cabeludo. Podem ser retiradas UF´s do tórax, barba, abdome ou outras regiões
          adjacentes.</p>
      </div>

      <div class="beneficios-item" data-animar>
        <div class="beneficios-icon">
          <svg width="106.62" height="102.8" viewBox="0 0 106.62 102.8">
            <use xlink:href="#marca"></use>
          </svg>
        </div>

        <h3>Long Hair</h3>

        <p>O Long Hair é uma técnica que permite que o cabelo seja transplantado com os fios longos. O maior benefício é
          que
          o
          paciente pode ter uma visão imediata do resultado final.</p>
      </div>

      <div class="beneficios-item" data-animar>
        <div class="beneficios-icon">
          <svg width="106.62" height="102.8" viewBox="0 0 106.62 102.8">
            <use xlink:href="#marca"></use>
          </svg>
        </div>

        <h3>Unshaved</h3>

        <p>Técnica que permite realizar o transplante capilar sem a raspagem do cabelo, permitindo que o paciente
          mantenha
          sua
          rotina normal, sem se afastar de seus afazeres diários.</p>
      </div>
    </div>
  </div>
</section>

<section class="parallax-tecnologia">
  <div class="container">
    <h2 class="title" data-animar>TECNOLOGIA E SENSO ARTÍSTICO PARA
      RESULTADOS COM NATURALIDADE</h2>
  </div>
</section>

<section class="tecnologia">
  <div class="tecnologia-item">
    <div class="tecnologia-img" data-animar>
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/tecno1.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/tecno1.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/tecno1@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/tecno1@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/tecno1@2x.jpg"
          alt="MODERNIDADE TECNOLÓGICA QUE FAZ TODA A DIFERENÇA" />
      </picture>
    </div>

    <div class="tecnologia-txt">
      <h2 class="title" data-animar>MODERNIDADE TECNOLÓGICA
        QUE FAZ TODA A DIFERENÇA</h2>
      <p data-animar>A equipe utiliza um moderno equipamento que permite executar, durante a retirada das unidades
        foliculares na
        técnica FUE, a rotação, oscilação e vibração com movimentos que podem ser combinados em qualquer sequência,
        velocidade e tempo.

        Esta tecnologia permite ao cirurgião maior precisão, delicadeza e eficácia durante a retirada das UF´s da área
        doadora, reduzindo o risco de transecção do fio.
      </p>
    </div>
  </div>

  <div class="tecnologia-item">
    <div class="tecnologia-img" data-animar>
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/tecno2.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/tecno2.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/tecno2@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/tecno2@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/tecno2@2x.jpg"
          alt="MMP®️ E O ACOMPANHAMENTO CLÍNICO PARA A MANUTENÇÃO DOS RESULTADOS" />
      </picture>
    </div>

    <div class="tecnologia-txt">
      <h2 class="title" data-animar>MMP®️ E O ACOMPANHAMENTO
        CLÍNICO PARA A MANUTENÇÃO
        DOS RESULTADOS</h2>
      <p data-animar>Após um Transplante Capilar é fundamental realizar o acompanhamento médico, a fim de verificar a
        evolução pós
        operatória do paciente ao longo dos anos. Tratamentos feitos em consultório, como o MMP®️ - Microinfusão de
        Medicamentos na Pele, podem ser indicados para a manutenção do resultado.

        Esse procedimento consiste na infusão de ativos estéreis, diretamente, no couro cabeludo, selecionados de forma
        personalizada, para tratar a queda, otimizar o crescimento capilar e acelerar o processo de recuperação
        pós-transplante, além de auxiliar em outras queixas relacionadas à beleza dos fios.
      </p>
    </div>
  </div>

  <div class="tecnologia-item">
    <div class="tecnologia-img" data-animar>
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/tecno3.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/tecno3.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/tecno3@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/tecno3@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/tecno3@2x.jpg" alt="Clínica Densitá" />
      </picture>
    </div>

    <div class="tecnologia-txt">
      <h2 class="title" data-animar>REFINAMENTO DOS RESULTADOS COM A MICROPIGMENTAÇÃO CAPILAR
      </h2>
      <p data-animar>Após o Transplante Capilar pode-se realizar a Micropigmentação ou Camuflagem para refinamento dos
        resultados. A técnica, nesses casos, visa disfarçar cicatrizes e proporcionar a impressão de maior densidade
        capilar. O procedimento é realizado por meio de um equipamento com pequenas agulhas estéreis que depositam os
        pigmentos na pele. Pelo fato de não ser um procedimento definitivo, sessões subsequentes podem ser necessárias
        para a manutenção do resultado.
      </p>
    </div>
  </div>
</section>

<?php get_footer();