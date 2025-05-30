<?php

return [

    /*
    |--------------------------------------------------------------------------
    | All translation Lines
    |--------------------------------------------------------------------------

    @settings taskup
    @package taskup
    @author  Amento Tech <info@amentotech.com>
    @license https://amentotech.com/
    @link    https://amentotech.com/
    */


    'adsense_client_id'     => 'ID do cliente do Adsense',
    'client_id'             => 'Inserir ID do cliente',
    'adsense_client_desc'   => 'ID do cliente do Adsense da conta do Adsense',
    'save_method'           => 'Método de salvamento',
    'api_setting_name'      => 'Configurações da API',
    'add_zipcode'           => 'Configurações de código postal',
    'zipcode_desc'          => 'Você pode habilitar as configurações de código postal e elas verificarão o código postal a partir da API de Geocodificação do Google. Assim, o usuário poderá enviar o gig ou as configurações do perfil, etc. Para desativar, basta desligar.',
    'add_map_key'           => 'Chave do Google Maps',
    'enter_api_key'         => 'Inserir chave da API',
    'map_key_desc'          => 'Inserir chave do Google Maps aqui. Será usada para os mapas do Google. Obtenha a chave da API em :get_api_key',
    'get_api_key'           => 'Obter chave da API',
    'google_connect'        => 'Conectar com o Google?',
    'google_connect_desc'   => 'Ao habilitar, o usuário poderá fazer login e se registrar usando uma conta do Google',
    'client_id'             => 'ID do cliente',
    'client_secret'         => 'Segredo do cliente',
    'save_setting'          => 'Salvar configurações',
    'switch_on'             => 'Ligado',
    'switch_off'            => 'Desligado',

    // ---------------------- Email setting translation ------------------------------- \\
    'email_setting_name'        => 'Configurações de email',
    'logo'                      => 'Logotipo do email',
    'logo_desc'                 => 'Carregue seu logotipo de email aqui.',
    'sender_name'               => 'Nome do remetente do email',
    'sender_name_desc'          => 'Adicione o nome do remetente do email aqui, como: João Silva. Por padrão, o nome do seu site será usado.',
    'site_name'                 => 'Nome do site',
    'site_name_desc'            => 'Insira o nome do site',
    'sender_email'              => 'Email do remetente',
    'sender_email_desc'         => 'Adicione o email do remetente aqui, como: johndoe@example.com. Por padrão, o email do seu site será usado.',
    'footer_text'               => 'Texto de direitos autorais no rodapé',
    'footer_text_desc'          => 'Adicione o texto de direitos autorais para os emails no rodapé',
    'sender_signature'          => 'Assinatura do remetente do email',
    'sender_signature_desc'     => 'Adicione a assinatura do remetente do email aqui, como equipe :nome_do_aplicativo.',
    'uploading'                 => 'Carregando...',
    'image_preview'             => 'Visualização do logotipo',
    'image_option'              => 'Você pode carregar apenas arquivos no formato :extension, certifique-se de que o tamanho do arquivo não exceda :size',
    'click_here_to_upload'      => 'Clique aqui para carregar',
    'remove'                    => 'Remover',

    // ---------------------- Project setting translation ------------------------------- \\
    'featured_project'              => 'Projeto em destaque',
    'project_setting'               => 'Configurações do projeto',
    'projet_min_amount'             => 'Valor mínimo do projeto fixo',
    'projet_min_amount_desc'        => 'O valor mínimo para criar um projeto com valor fixo',

    'project_price_search_range'     => 'Intervalo de preço de busca do projeto',

    'seller_min_hr_rate'            => 'Taxa mínima por hora do vendedor',
    'seller_max_hr_rate'            => 'Taxa máxima por hora do vendedor',

    'search_max_price_desc'         => 'Preço máximo usado para pesquisa de projetos',
    'search_min_price_desc'         => 'Preço mínimo usado para pesquisa de projetos',

    'seller_price_search_range'     => 'Intervalo de preço por hora para buscar um vendedor',

    'maximum_freelancer'            => 'Contagem máxima',
    'maximum_freelancer_desc'       => 'Contagem máxima mostrada no menu suspenso de freelancers usado para criar um projeto',
    'project_default_status'        => 'Status padrão do projeto',
    'project_default_status_desc'   => 'Selecione o status padrão do projeto',
    'publish'                       => 'Publicado',
    'pending'                       => 'Pendente',
    'fixed_proj_opt_plc'            => 'Selecionar opções de projeto fixo',
    'hide_option_yes'               => 'Sim, Ocultar',
    'hide_option_no'                => 'Não, Mostrar ambas as opções aos vendedores',
    'recommended_opt'               => 'Critérios recomendados de freelancers para o passo 4',
    'recommended_opt_placeholder'   => 'Selecionar opção',
    'recommended_opt_desc'          => 'Critérios recomendados de freelancers usados na criação do projeto (passo 4)',
    'rec_options_lang'              => 'Idiomas',
    'rec_options_skill'             => 'Habilidades',
    'step2_validation'              => 'Critérios de validação da criação do projeto para o passo 2',
    'step2_validation_desc'         => 'Validação necessária para a criação de um projeto no passo 2',
    'step2_duration_opt'            => 'Duração do projeto',
    'step2_category_opt'            => 'Categoria do projeto',
    'step2_project_detail_opt'      => 'Descrição do projeto',

    'step3_validation'              => 'Critérios de validação da criação do projeto para o passo 3',
    'step3_validation_desc'         => 'Validação necessária para a criação de um projeto no passo 3',
    'step3_expert_level_opt'        => 'Nível de especialização',
    'step3_skills_opt'              => 'Habilidades',
    'step3_languages_opt'           => 'Idiomas',

    // ---------------------- Proposal settings ------------------------------- \\
    'proposal_settings'             => 'Configurações de proposta',
    'proposal_default_status'       => 'Status padrão da proposta',
    'proposal_default_status_desc'  => 'Por favor, selecione o status padrão da proposta',
    'prop_auto_appr_opt'            => 'Aprovado automaticamente',
    'prop_pending_opt'              => 'Pendente',

    // ---------------------- packages settings ------------------------------- \\
    'duration_info'                 => 'A duração deve ser em números de meses',
    'set_package_status'            => 'Definir status do pacote',
    'updated_record'                => 'Configuração atualizada com sucesso',
    'wrong_msg'                     => 'Algo deu errado, por favor, tente novamente',
    'single_project_credits'        => 'Créditos a aplicar em um único projeto',
    'sngl_proj_cred_placeholder'    => 'Adicionar créditos',
    'package_opt_free'              => 'Listagem gratuita para ambos os tipos de usuários',
    'package_opt_paid'              => 'Listagem paga para ambos',
    'package_opt_seller_paid'       => 'Listagem paga para vendedores',
    'package_opt_buyer_paid'        => 'Listagem paga para compradores',
    'packege_option_settings'       => 'Configurações de opções de pacote',
    'packege_option'                => 'Opções de pacote',
    'select_packege_option'         => 'Selecione a opção de pacote',
    'add_package'                   => 'Adicionar pacote',
    'update_package'                => 'Atualizar pacote',
    'package_for'                   => 'Pacote para',
    'buyer'                         => 'Comprador',
    'seller'                        => 'Vendedor',
    'package_type'                  => 'Tipo de pacote',
    'package_duration'              => 'Duração do pacote',
    'package_duration_placeholder'  => 'Adicionar duração do pacote',
    'package_name'                  => 'Nome do pacote',
    'package_name_placeholder'      => 'Adicionar nome do pacote',
    'credits'                        => 'Número de créditos',
    'credits_placeholder'            => 'Adicionar número de créditos',
    'package_price'                 => 'Preço do pacote',
    'price_placeholder'             => 'Adicionar preço do pacote',
    'profile_featured_days'         => 'Duração de destaque do perfil (em dias)',
    'feature_day_lable'             => '1 Dia',
    'feature_days_lable'            => ':days Dias',
    'ftr_duration_placeholder'      => 'Adicionar duração do destaque',
    'posted_projects'               => 'Número de projetos para publicar',
    'feature_project'               => 'Projetos em destaque',
    'feature_project_duration'      => 'Duração dos projetos em destaque',
    'day_option'                    => 'Dia(s)',
    'month_option'                  => 'Mês(es)',
    'year_option'                   => 'Ano(s)',
    'package_type_daily'            => 'Diário',
    'package_type_monthly'          => 'Mensal',
    'package_type_yearly'           => 'Anual',
    'upload_image'                  => 'Carregar imagem',
    'image_preview'                 => 'Visualização da imagem',
    'package_heading'               => 'Pacotes',
    'featured_project_durtation'    => 'Duração do projeto em destaque',
    'package_detail'                => 'Detalhe do pacote',

    //------------------------General settings ---------------------\\
    'min_withdrawal_amt'            => 'Limite de saque mínimo',
    'min_withdrawal_amt_desc'       => 'Valor mínimo de saque para o vendedor',
    'min_withdrawal_amt_placeholder'=> 'Adicionar valor',
    'general_settings'              => 'Configurações gerais',
    'file_extensions'               => 'Extensões de arquivo',
    'file_extensions_placeholder'   => 'Adicione extensões de arquivo separadas por vírgula.',
    'file_extensions_desc'          => 'Adicione extensões de arquivo separadas por texto separado por vírgula.',

    'image_file_ext'                => 'Extensões de arquivo de imagem',
    'image_file_ext_placeholder'    => 'Adicione extensões de arquivo de imagem separadas por vírgula.',
    'image_file_ext_desc'           => 'Adicione extensões de arquivo de imagem separadas por texto separado por vírgula.',
    'dashbaord_footer_page'         => 'Rodapé para páginas do painel',
    'error_page_footer'             => 'Rodapé para páginas de erro',
    'footer_page_placeholder'       => 'Selecione a página',

    'date_format'                   => 'Formato de data',
    'date_format_placeholder'       => 'Por favor, selecione o formato de data',
    'profile_formate_address'       => 'Formato de endereço do perfil',
    'address_placeholder'           => 'Por favor, selecione o formato de endereço do perfil',
    'currency'                      => 'Moeda',
    'default_currency'              => 'Moeda padrão',
    'currency_placeholder'          => 'Por favor, selecione a moeda',

    'date_format0'                  => '%s (F j, Y, g:i a)',
    'date_format1'                  => '%s (F j, Y)',
    'date_format2'                  => '%s (Y-m-d)',
    'date_format3'                  => '%s (d-m-Y)',
    'date_format4'                  => '%s (m/d/Y)',
    'date_format5'                  => '%s (d/m/Y)',

    'address_format1'                => 'Cidade, País',
    'address_format2'                => 'Estado, País',
    'address_format3'                => 'Cidade, Estado, País',

    'per_page_record'                => 'Mostrar registros por página',
    'per_page_record_placeholder'    => 'Selecione registros por página',

    'per_page_10_rec'               => 'Mostrar 10 registros por página',
    'per_page_20_rec'               => 'Mostrar 20 registros por página',
    'per_page_30_rec'               => 'Mostrar 30 registros por página',
    'per_page_50_rec'               => 'Mostrar 50 registros por página',
    'per_page_100_rec'              => 'Mostrar 100 registros por página',

    'image_file_size'               => 'Tamanho do arquivo de imagem',
    'image_file_size_placeholder'   => 'Adicionar tamanho do arquivo de imagem',
    'image_file_size_desc'          => 'Por favor, adicione o tamanho do arquivo de imagem em "MB"',
    'file_size'                     => 'Tamanho do arquivo',
    'file_size_placeholder'         => 'Adicionar tamanho do arquivo',
    'file_size_desc'                => 'Por favor, adicione o tamanho do arquivo em "MB"',
    'search'                        => 'Buscar',
    'name'                          => 'Nome',
    'price'                         => 'Preço',
    'added_msg'                     => 'Pacote criado com sucesso',
    'updated_msg'                   => 'Pacote atualizado com sucesso',
    'deleted_msg'                   => 'Pacote excluído com sucesso',
    'update_save_btn'               => 'Atualizar e Salvar',
    'default_seller_banner_img'     => 'Imagem do banner do perfil do vendedor padrão',
    'social_links'                  => 'Link social do perfil do vendedor',
    'select_opion'                  => 'Selecionar opção',
    'grid_view'                     => 'Visualização em grade',
    'list_view'                     => 'Visualização em lista',
    'social_links_desc'             => 'Habilitar/desabilitar links sociais para o vendedor',

    'add_dashboard_adsense'         => 'Adicionar código de script do AdSense',
    'add_profile_adsense'           => 'Adicionar código de script do AdSense',
    'add_project_adsense'           => 'Adicionar código de script do AdSense',
    'add_gig_adsense'               => 'Adicionar código de script do AdSense',
    'dashboard_adsense_desc'        => 'Código de anúncio do AdSense que será exibido na página do painel',
    'profile_adsense_desc'          => 'Código de anúncio do AdSense que será exibido nas páginas de perfil',
    'project_adsense_desc'          => 'Código de anúncio do AdSense que será exibido nas páginas de projeto',
    'gig_adsense_desc'              => 'Código de anúncio do AdSense que será exibido nas páginas de serviço',
    'gig_listing_layout'            => 'Tipo de layout da página de listagem de serviços',
    'select_option'                 => 'Selecionar da lista',
    'deactive_account_reasons'      => 'Motivos para desativar a conta',
    'placeholder_account_reasons'   => 'Adicionar motivo',
    'rtl_label'                     => 'Ativar RTL',
    'rtl_desc'                      => 'Ativar direção da direita para a esquerda das páginas da web',


    // ========================= Commission settings =======================\\
    'maximum_range'                 => 'Maior ou igual a :value',
    'commission_settings'           => 'Configurações de comissão',
    'project_commission_free'       => 'Selecionar tipo de taxa de comissão',
    'no_commission'                 => 'Sem comissão',
    'fixed_commission'              => 'Comissão fixa',
    'percentage_commission'         => 'Comissão percentual',
    'commission_tiers'              => 'Escalões de comissão',
    'fixed_commission_price'        => 'Comissão de projeto de preço fixo',
    'fixed_price_placeholder'       => 'Por favor, adicione o valor aqui',
    'fixed_price_desc'              => 'O valor mencionado será aplicado por projeto.',

    'hourly_commission_price'       => 'Comissão por projeto por hora',
    'hourly_price_placeholder'      => 'Por favor, adicione o valor aqui',
    'hourly_price_desc'             => 'O valor mencionado será aplicado por projeto.',

    'percentage_amount_placeholder' => 'Por favor, adicione o valor percentual aqui',
    'project_price_range'           => 'Faixa de preço da proposta',
    'price_range_placeholder'       => 'Selecione faixa de preço',
    'commission_type'               => 'Tipo de comissão',
    'comm_type_placeholder'         => 'Selecione o tipo',
    'comm_type_opt_fixed'           => 'Fixo',
    'comm_type_opt_percentage'      => 'Percentual',
    'project_commission'            => 'Comissão do projeto',
    'comm_placeholder'              => 'Adicione o valor',
    'project_commission_desc'       => 'O valor mencionado será cobrado por projeto',
    'add_more'                      => 'Adicionar mais',
    'add_more_desc'                 => 'Clique no botão <em>“Adicionar mais”</em> para adicionar uma nova regra de comissão',
    'no_commission_desc'            => 'Nenhuma regra de comissão aplicada aos projetos',

    //=========================Payment methods ========================\\
    'missing_credentials'           => 'Credenciais ausentes, por favor, forneça credenciais válidas.',
    'no_settings_error_msg'         => 'Por favor, adicione as configurações do método de pagamento.',
    'stripe_id'                     => 'Chave pública do Stripe',
    'stripe_key'                    => 'Chave secreta do Stripe',
    'stripe_webook'                 => 'Segredo do webhook do Stripe (opcional)',
    'stripe_title'                  => 'Stripe',
    'stripe_payment_title'          => 'Configurações de pagamento do Stripe',
    'stripe_id_placeholer'          => 'Insira o ID do Stripe',
    'stripe_key_placeholer'         => 'Insira a chave do Stripe',
    'stripe_webook_placeholer'      => 'Insira o segredo do webhook do Stripe',
    'stripe_currency'               => 'Insira o código de moeda do Stripe (opcional)',
    'currency_placeholder'          => 'Insira o código de moeda',
    'srtipe_currency_desc'          => 'o padrão é USD',
    'others'                        => 'Outros',
    'method_placeholder'            => 'Selecione o método',
    'checkout_method'               => 'Selecione o método de pagamento para o checkout',
    'escrow_title'                  => 'Escrow',
    'edit'                          => 'Editar',
    'payment_methods'               => 'Métodos de pagamento disponíveis',
    'default_payment_method'        => 'Método de pagamento padrão',
    'escrow_payment_title'          => 'Configurações de pagamento de depósito',
    'escrow_payment_desc'           => 'Ativar pagamento de depósito',
    'escrow_email'                  => 'ID de e-mail de depósito',
    'escrow_email_placeholer'       => 'Insira o ID de e-mail de depósito',
    'escrow_email_desc'             => 'Adicione seu endereço de e-mail válido que você usa para fazer login em :escrow_site_link',
    'escrow_api_key'                => 'Chave da API de depósito',
    'escrow_api_key_placeholer'     => 'Insira a chave da API de depósito aqui',
    'api_key_desc'                  => 'Onde encontrar? Clique aqui para obter uma :get_api_key chave de API.',
    'escrow_site'                   => 'Escrow.com',
    'escrow_url'                    => 'URL da API do Escrow',
    'escrow_url_placeholer'         => 'Insira a URL da API do Escrow',
    'escrow_url_desc'               => 'Para o ambiente de produção, você pode usar :production_url e para o ambiente de teste você pode usar :testing_url <br /> Certifique-se de atualizar o E-mail de Depósito e a Chave da API de Depósito de acordo com seu ambiente selecionado.',
    'escrow_production_url'         => 'https://api.escrow.com/',
    'escrow_testing_url'            => 'https://api.escrow-sandbox.com/',
    'escrow_currency_opt_usd'       => 'USD',
    'escrow_currency_opt_eur'       => 'EUR',
    'escrow_currency_opt_aud'       => 'AUD',
    'escrow_currency_opt_gbp'       => 'GBP',
    'escrow_currency_opt_cad'       => 'CAD',
    'razorpay_title'                => 'Razorpay',
    'paystack_title'                => 'Paystack',
    'paytm_title'                   => 'Paytm',
    'mercadopago_title'             => 'Mercado',
    'squareup_title'                => 'SquareUp',
    'iyzipay_title'                 => 'IyziPay',
    'paytabs_title'                 => 'PayTabs',
    'industry_type'                 => 'Tipo de indústria',
    'industry_type_placeholer'      => 'Insira o tipo de indústria',
    'flutterwave_title'             => 'Flutterwave',
    'payu_title'                    => 'Payu',
    'paypal_title'                  => 'Paypal',
    'paystack_email'                => 'E-mail do comerciante do Paystack',
    'razorpay_payment_title'        => 'Configurações de pagamento do Razorpay',
    'paystack_payment_title'        => 'Configurações de pagamento do Paystack',
    'payfast_payment_title'         => 'Configurações de pagamento do Payfast',
    'payu_payment_title'            => 'Configurações de pagamento do Payu',
    'paypal_payment_title'          => 'Configurações de pagamento do Paypal',
    'payu_key'                      => 'Chave do Payu',
    'paytm_payment_title'           => 'Configurações de pagamento do Paytm',
    'flutterwave_payment_title'     => 'Configurações de pagamento do Flutterwave',
    'secret_key_placeholer'         => 'Insira a chave secreta',
    'razorpay_key'                  => 'ID da Chave do Razorpay',
    'public_key'                    => 'Chave pública',
    'paytm_key'                     => 'Chave do Paytm',
    'secret_key'                    => 'Chave secreta',
    'paytm_id'                      => 'ID do Paytm',
    'paystack_api_secret'           => 'Segredo da API do Paystack',
    'paystack_api_key'              => 'Chave da API do Paystack',
    'paystack_api_key_placeholer'   => 'Insira a chave da API do Paystack',
    'api_secret_placeholer'         => 'Insira o segredo da API do Paystack',
    'razorpay_key_placeholer'       => 'Insira o ID da Chave do Razorpay',
    'paystack_email_placeholer'     => 'Insira o e-mail do Paystack',
    'public_key_placeholer'         => 'Insira a chave pública',
    'payu_key_placeholer'           => 'Insira a chave do Payu',
    'paytm_key_placeholer'          => 'Insira o ID da Chave do Paytm',
    'paytm_id_placeholer'           => 'Insira o ID do Paytm',
    'paytm_website'                 => 'Website do Paytm',
    'razorpay_secret'               => 'Segredo da Chave do Razorpay',
    'razorpay_secret_placeholer'    => 'Insira o Segredo da Chave do Razorpay',
    'paytm_website_placeholer'      => 'Insira a URL do site do Paytm',
    'inspection_period'             => 'Período de inspeção',
    'insp_period_placeholder'       => 'Selecione a opção',
    'paytm_chennel'                 => 'Canal do Paytm',
    'paytm_chennel_placeholer'      => 'Insira o canal do Paytm',
    'insp_period_opt_day1'          => '1 dia',
    'insp_period_opt_day'           => ':day_count dias',
    'fee_paid_by_seller_opt'        => 'Comprador',
    'fee_paid_by_buyer_opt'         => 'Vendedor',
    'fee_paid_by_both_opt'          => 'Dividir 50/50',
    'fee_paid_by'                   => 'Taxa de depósito paga por',
    'fee_paid_by_placeholder'       => 'Selecione a opção',
    'fee_paid_by_placeholder'       => 'Selecione a opção',
    'incorrect_api_message'         => 'Sua chave de API ou e-mail pode estar incorreto, verifique sua chave de API ou e-mail e tente novamente.',
    'method_escrow'                 => 'Depósito',
    'select_payment_method'         => 'Por favor, selecione o método de pagamento primeiro',
    'created_webhook'               => 'Webhook criado com sucesso',
    'failed_webhook'                => 'E-mail ou chave API incorretos, por favor, adicione o e-mail correto ou chave API para criar o webhook',
    'buyer_dispute_issues'          => 'Questões de disputa do comprador',
    'seller_business_type'          => 'Tipos de negócios do vendedor',
    'placeholder_business_type'     => 'Insira o tipo de negócio',
    'seller_dispute_issues'         => 'Questões de disputa do vendedor',
    'enter_issue'                   => 'Adicionar problema de disputa',
    'set_dispute_days'              => 'Definir número de dias',
    'set_dispute_days_desc'         => 'Definir o número mínimo de dias que o comprador pode levantar disputa para o administrador',
    'dispute_after_placeholder'     => 'Insira dias',
    'empty_setting_desc'            => 'Clique em :edit_btn_txt para adicionar seu método de pagamento',
    'edit_txt'                      => '“ Editar ”',

    // ======================= Site Setting =========================== \\
    'site_setting_title'            => 'Configurações do site',
    'site_title'                    => 'Nome do site',
    'site_title_placeholder'        => 'Insira o nome do site',
    'site_favicon'                  => 'Ícone do site',
    'site_dark_logo'                => 'Logotipo escuro do site',
    'site_lite_logo'                => 'Logotipo claro do site',
    'auth_pages_bg'                 => 'Imagem de fundo das páginas de autenticação',
    'auth_pages_desc'               => 'Páginas de autenticação como (login, registro, esqueceu a senha)',
    'facebook'                      => 'Facebook',
    'twitter'                       => 'Twitter',
    'linkedin'                      => 'LinkedIn',
    'dribbble'                      => 'Dribbble',
    'footer_paragraph'              => 'Parágrafo do rodapé',
    'footer_apps_heading'           => 'Título dos aplicativos do rodapé',
    'android_app_logo'              => 'Logotipo do aplicativo Android',
    'android_app_url'               => 'URL do aplicativo Android',
    'ios_app_logo'                  => 'Logotipo do aplicativo iOS',
    'ios_app_url'                   => 'URL do aplicativo iOS',
    'footer_categories_heading'     => 'Título das categorias do rodapé',
    'footer_contact_heading'        => 'Título dos contatos do rodapé',
    'contact_us_heading'            => 'Título de contato',
    'phone'                         => 'Telefone',
    'email'                         => 'E-mail',
    'whatsapp'                      => 'WhatsApp',
    'fax'                           => 'Fax',
    'phone_call_availability'       => 'Disponibilidade de chamada telefônica',
    'whatsapp_call_availability'    => 'Disponibilidade de chamada WhatsApp',


    // ======================= theme Setting =========================== \\

    'text_dark_color'           => 'Cor do texto escuro',
    'text_dark_color_desc'      => 'Cor do texto escuro que será usada no tema',
    'text_light_color'          => 'Cor do texto claro',
    'text_white_color'          => 'Cor do texto branco',
    'text_yellow_color'         => 'Cor do texto amarelo',
    'text_light_color_desc'     => 'Cor do texto claro que será usada no tema',
    'text_white_color_desc'     => 'Cor do texto branco que será usada no tema',
    'text_yellow_color_desc'    => 'Cor do texto amarelo que será usada no tema',
    'heading_color'             => 'Cor do título',
    'sub_heading_color'         => 'Cor do subtítulo',
    'heading_color_desc'        => 'Cor do título que será usada no tema',
    'sub_heading_color_desc'    => 'Cor do subtítulo que será usada no tema',
    'theme_primary_color'       => 'Cor primária do tema',
    'theme_secondary_color'     => 'Cor secundária do tema',
    'theme_footer_bg'           => 'Cor de fundo do rodapé',
    'button_bg_pri_color'       => 'Cor de fundo do botão primário',
    'button_bg_sec_color'       => 'Cor de fundo do botão secundário',
    'button_bg_sec_color_desc'  => 'Cor de fundo do botão secundário que será usada no tema',
    'button_bg_pri_color_desc'  => 'Cor de fundo do botão primário que será usada no tema',
    'button_text_color'         => 'Cor do texto do botão',
    'link_color'                => 'Cor do link',
    'link_color_desc'           => 'Cor do link que será usada no tema',
    'header_text_color'         => 'Cor do texto do cabeçalho',

    // ======================= Front Pages Setting =========================== \\

    'top_menu_page'                 => 'Barra de menu superior para páginas dinâmicas',
    'top_bar_content'               => 'Conteúdo da barra de menu superior',
    'header_variation_for_pages'    => 'Estilo de cabeçalho para página',
    'header_variation'              => 'Variação de cabeçalho para página',
    'select_page'                   => 'Selecionar página',
    'top_menu_default_page'         => 'Ativar barra de menu superior para páginas fixas',
    'header_search_for_pages'       => 'Pesquisa de cabeçalho para páginas',
    'app_id'                        => 'ID do aplicativo',
    'app_key'                       => 'Chave do aplicativo',
    'secret_id'                     => 'ID secreto',
    'enter_value'                   => 'Inserir valor',
    'api_key'                       => 'Chave da API',
    'fees_payer'                    => 'Pagador de taxas',
    'api_url'                       => 'URL da API',
    'stripe_secret'                 => 'Segredo do Stripe',
    'stripe_webhook_secret'         => 'Segredo do webhook do Stripe',
    'cashier_currency'              => 'Moeda do Caixa',
    'webhook_url'                   => 'URL do webhook',
    'website'                       => 'Website',
    'chennel'                       => 'Canal',
    'payfast_title'                 => 'Payfast',
    'merchant_id'                   => 'ID do comerciante',
    'merchant_key'                  => 'Chave do comerciante',
    'pass_phrase'                   => 'Frase secreta',
    'enable_test_mode'              => 'Modo de teste ativado',
    'payment_success_msg'           => 'Sua transação foi processada e seu pedido será confirmado em breve, assim que recebermos a confirmação do Payfast',
    'exchange_rate'                 => 'Taxa de câmbio',
    'not_exist_payment_method'      => 'Método de pagamento solicitado não é suportado',
    'manage_project_gig_module'     => 'Gerenciar Módulo de Projeto/Gig',
    'project'                       => 'Projeto',
    'gig'                           => 'Gig'

];
