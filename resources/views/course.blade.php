@extends("templates.app")
@section("head")
<link rel="stylesheet" href="{{asset('css/course.css')}}">
<script>
    function initMap() {
      const ufape = { lat: -8.906759, lng: -36.494308 };
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 16,
        center: ufape,
      });
    //   const marker = new google.maps.Marker({
    //     position: ufape,
    //     map: map,
    //   });
    }
  </script>
@endsection

@section("content")
<h2 id="title">Bacharelado em Ciência da Computação</h2>
<div style="margin-top:0px"class="course">Objetivo do curso</div>
<div class="course-container">
    <p>Formar profissionais com bases científicas e tecnológicas na área de computação, capazes de resolver problemas dos mais diferentes domínios, através de métodos e técnicas computacionais, para atuar de forma bem sucedida tanto na área acadêmica quanto no mercado de trabalho.</p>

    <div class="course">Segmentos de Atuação do Cientista da Computação</div>
    <ul class="segmentsList">
        <li>Indústria de Software em Geral</li>
        <li>Indústrias diversas (Civil, Marketing, Mecânica, Elétrica, entre outras)</li>
        <li>Empresas e Projetos próprios (startups)</li>
        <li>Instituições de Ensino</li>
        <li>Órgãos e instituições públicas</li>
    </ul>

    <div class="course">Áreas de Atividade do Cientista da Computação</div>
    <ul class="areasList">
        <li class="areaItem">
            <img src="https://image.flaticon.com/icons/png/512/51/51334.png">
            <p class="bold">Banco de Dados</p>
        </li>
        <li class="areaItem">
            <img src="https://www.somosicev.com/wp-content/uploads/2017/08/escoladetecnologia-icon5.png">
            <p class="bold">Engenharia de Software</p>
        </li>
        <li class="areaItem">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmS6V9aIQeXVZv3IxLPKqWThtk_QUdo-GdbbbfvsHVefs1ob5ZWE0s2Afzsjjwxg4-_ow&usqp=CAU">
            <p class="bold">Inteligência Computacional</p>
        </li>
        <li class="areaItem">
            <img src="https://image.flaticon.com/icons/png/512/22/22919.png">
            <p class="bold">Redes e Sistemas Distribuídos</p>
        </li>
        <li class="areaItem">
            <img src="img/fluxo.png">
            <p class="bold">Metodologias e Técnicas de Computação</p>
        </li>
        <li class="areaItem">
            <img src="img/ti.png">
            <p class="bold">Tecnologia da Informação</p>
        </li>

        <li class="areaItem">
            <img src="https://ocw.mit.edu/courses/chemical-engineering/10-34-numerical-methods-applied-to-chemical-engineering-fall-2015/10-34f15-1.jpg">
            <p class="bold">Matemática e Simulação Computacional</p>
        </li>
        <li class="areaItem">
            <img src="data:image/png;base64,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">
            <p class="bold">Engenharia da Computação</p>
        </li>
        <li class="areaItem">
            <img src="img/tec-edu.png">
            <p class="bold">Tecnologia Educacional</p>
        </li>
        <li class="areaItem">
            <img src="img/midia.jpg">
            <p class="bold">Mídia e Interação</p>
        </li>
    </ul>
    <div class="course">Contato:</div>
    <a href="mailto:coordenacao.bcc@ufape.edu.br">coordenacao.bcc@ufape.edu.br</a>

    <div class="course">Coordenador</div>
    <p>Igor Medeiros Vanderlei</p>
    <a href="mailto:igor.vanderlei@ufape.edu.br">igor.vanderlei@ufape.edu.br</a>
    <p id="lattes">Lattes: <a style="font-weight:normal;" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4718526Y3&tokenCaptchar=03AGdBq275yFaY0hyRN1tk5PuXxApykdzECOiJT74RzJ21nV2YVPDK8KFg7hypyEUdOfGPnHWTK3uXbwodV_s-OcGtk8q2t4wgIN3RcDOCcr-gu5-gEo_VugMsRZHGdy-kczfdhfbOq0VQ4lDbmjGwkoZ_8CUfrQe_jJdWlqFzNmCVgyK0SeoE-IQGrCoMEXxpcaPnwo38tZBGmgsGAbNEbWO42GeD4VB1zwSv4u8rs2kWnwCD0A3q-D5SUoOHVzL4MsLdlm94T6hZsYeCvAvhMzML025-JbUXlwNjLSZ4c5HBbLvmVScVUBEZAfmnlWU8rkctjabsP_4QTIxsHo38zR0Ig1PnE0xzQy41XFCqCsWb3_--VtokrT8isia659bQJo8v82e3lqYfLmG9xcqk846900evTESNzBDmNnAKyN-f7mpKABogFLbu9YpRe8bbONmGu3xnaSjRxX426FavZHseZUgrvbBAh-9vqz8CcPX3Ex1NdqxxLpOwDEt1kk68ViPEDyD6BbHW-T2Qe09qfE3bFpsr1vEohg" target="_blank">Link</a></p>

    <div class="course">Eventual Substituto</div>
    <p>Jean Carlos de Araújo Teixeira</p>
    <a href="mailto:jean.teixeira@ufape.edu.br">jean.teixeira@ufape.edu.br</a>
    <p class="bold">Lattes: <a style="font-weight:normal;" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4441815A6&tokenCaptchar=03AGdBq25aToJUIg0xQmDu7Z0K07aFayLUB064MvFNothzlt9S5QVd2aQd7xhiKtVec0R9gEbbzUOmTqlG7OGi7KDVEMVhrG2U_Xu9K0kfK3A_s7Wx_4BnQNbuUVifMZCj9qdJxJloEdzmv4-oq5A3Kd9rftcofQWJf0cEG6zmtIDsciQrKoImXNCxIKLZt7N8CUkkEDvpPQALCJIDkkBXj_5xRAp1OjcGJTiO7Hdo7e-sll5CCrZGIAsz-vr1iHhkAUztpMdHx3m_LgcFg3JoxgAi9z__jJjhKgkhiyPLUlJYbK_WxNxeON8xMGP2--ZyuKkVEXwroYOAmXdXKkYH1RFcsw8sH8mqC3-vIB40wqSY_ULVVwBeD06-sRmrUXM-lK8p8egq0EOX7qZOthhZbT_35LlGW9BYSTNaGGi1YU_f6mwXsXU92prHLHQPNRPSzuVVHLPYdHG6NUx7UP2Ku9zkiAQMbqOpdXvm7jn_uFkF_wYvV96K8jxzMRbyWEgOnzrzsVVh43uBXEodjVhoiNffZwuXo9lqTQ" target="_blank">Link</a></p>

    <div class="course">NDE – Núcleo Docente Estruturante:</div>
    <p><a href="https://drive.google.com/file/d/115lvXn9tKg7vAThSN6G8FwvTK1kvNNGC/view" target="_blank"><strong>Portaria N° 12/2021 - CGCG</strong></a></p>
    <p>Igor Medeiros Vanderlei</a></p>
    <p>Jean Carlos Teixeira de Araújo</p>
    <p>Diogo de Lima Lages</p>
    <p>Dimas Cassimiro do Nascimento Filho</p>
    <p>Gersonilo Oliveira da Silva</p>
    <p>Ícaro Lins Leitão da Cunha</p>
    <p>Murilo Chavedar de Souza Araújo</p>
    <p>Rodrigo Gusmão de Carvalho Rocha</p>
    <p>Sergio Francisco Tavares de Oliveira Mendonça</p>
    <p>Tiago Buarque Assunção de Carvalho</p>

    <div class="course">CCD – Colegiado de Curso:</div>
    <p><a href="https://drive.google.com/file/d/1Zf4g2XjaomorqmFiQWVkGvk_QHC_K7eX/view" target="_blank"><strong> Portaria N° 13/2021 - CGCG</a></strong></p>
    <p>Igor Medeiros Vanderlei</p>
    <p>Jean Carlos Teixeira de Araújo</p>
    <p>Assuero Fonseca Ximenes</p>
    <p>Diogo de Lima Lages</p>
    <p>Kadna Maria Alves Camboim Vale</p>
    <p>Maria Aparecida Amorim Sibaldo de Carvalho</p>
    <p>Priscilla Kelly Machado Vieira Azevedo</p>
    <p>Rodrigo Cardoso Amaral de Andrade</p>
    <p>Rodrigo Gusmão de Carvalho Rocha</p>
    <p>Ryan Ribeiro de Azevedo</p>
    <p>Thais Alves Burity Rocha</p>
    <p>Alessandro dos Santos Marques Júnior</p>
    <p>Cleovaldo José de Lima e Silva Junior</p>


    <div class="course">COAA – Comissão de Orientação e Acompanhamento Acadêmico</div>
    <p>Igor Medeiros Vanderlei</p>
    <p>Jean Carlos Teixeira de Araújo</p>
    <p>Gersonilo Oliveira da Silva</p>
    <p>Murilo Chavedar de Souza Araújo</p>

    <div class="course"> COE – Comissão de Estágio:</div>
    <p>Igor Medeiros Vanderlei</p>
    <p>Rodrigo Gusmão de Carvalho Rocha</p>
    <p>Kadna Maria Alves Camboim Vale</p>

    <div class="course">Outras Informações:</div>
    <p class="bold">Modalidade: <span style="font-weight:normal;">Bacharelado</span></p>
    <p class="bold">Título do Egresso: <span style="font-weight:normal;">Bacharel em Ciência da Computação</span></p>
    <p class="bold">Área do Conhecimento: <span style="font-weight:normal;">Ciências Exatas e da Terra</span></p>
    <p class="bold">Modalidade de Educação: <span style="font-weight:normal;">Presencial (ensino a distância restrito ao percentual imposto por legislação em vigor)</span></p>
    <p class="bold">Número de vagas: <span style="font-weight:normal;">80 (oitenta) vagas anuais, sendo 40 (quarenta) vagas semestrais</span></p>
    <p class="bold">Carga horária: <span style="font-weight:normal;">3.200 (três mil e duzentas) horas</span></p>
    <p class="bold">Horário Funcionamento: <span style="font-weight:normal;">Predominantemente Noturno</span></p>
    <p class="bold">Local de Oferta: <span style="font-weight:normal;">Universidade Federal do Agreste de Pernambuco</span></p>
    <div id="map" style="height:500px; width:100%;margin-top: 10px;"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkdXPDBGp7UKth66QebQFNs5tTeHvwm9w&callback=initMap&libraries=&v=weekly"
      async
    ></script>

</div>
@endsection
