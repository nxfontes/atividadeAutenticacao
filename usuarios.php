<?php

/*
 * Arquivo fornecido pelo professor.
 *
 * Logins para teste:
 * ana     / 123456
 * bruno   / php2026
 * carla   / design123
 * diego   / dev456
 * eduarda / web789
 *
 * As senhas estão em texto puro somente para fins didáticos.
 */

$usuarios = [
    'ana' => [
        'senha' => '123456',
        'nome' => 'Ana Souza',
        'foto' => 'https://randomuser.me/api/portraits/women/44.jpg',
        'email' => 'ana.souza@exemplo.com',
        'idade' => 22,
        'cidade' => 'São Paulo',
        'estado' => 'SP',
        'curso' => 'Desenvolvimento de Sistemas',
        'ocupacao' => 'Estagiária Front-end',
        'nivel' => 'Intermediário',
        'biografia' => 'Apaixonada por interfaces bonitas, acessibilidade e experiências digitais.',
        'pontos' => 1280,
        'media' => 9.2,
        'status' => 'Online',
        'habilidades' => [
            'HTML',
            'CSS',
            'JavaScript',
            'PHP',
            'Figma'
        ],
        'interesses' => [
            'Desenvolvimento web',
            'UI/UX',
            'Inteligência Artificial'
        ],
        'projetos' => [
            [
                'nome' => 'Sistema de Biblioteca',
                'descricao' => 'Aplicação para cadastrar livros e controlar empréstimos.',
                'tecnologias' => ['PHP', 'MySQL'],
                'nota' => 9.5
            ],
            [
                'nome' => 'Portfólio Pessoal',
                'descricao' => 'Site responsivo para apresentar projetos pessoais.',
                'tecnologias' => ['HTML', 'CSS', 'JavaScript'],
                'nota' => 9.0
            ]
        ],
        'avaliacoes' => [
            [
                'autor' => 'Professor Carlos',
                'nota' => 5,
                'comentario' => 'Excelente dedicação e muita criatividade nos projetos.'
            ],
            [
                'autor' => 'Mariana Alves',
                'nota' => 4,
                'comentario' => 'Trabalha muito bem em equipe.'
            ]
        ]
    ],

    'bruno' => [
        'senha' => 'php2026',
        'nome' => 'Bruno Lima',
        'foto' => 'https://randomuser.me/api/portraits/men/46.jpg',
        'email' => 'bruno.lima@exemplo.com',
        'idade' => 25,
        'cidade' => 'Campinas',
        'estado' => 'SP',
        'curso' => 'Análise e Desenvolvimento de Sistemas',
        'ocupacao' => 'Desenvolvedor Back-end Júnior',
        'nivel' => 'Avançado',
        'biografia' => 'Gosta de resolver problemas e construir sistemas organizados e seguros.',
        'pontos' => 2140,
        'media' => 8.8,
        'status' => 'Ausente',
        'habilidades' => [
            'PHP',
            'Laravel',
            'MySQL',
            'Git',
            'Docker'
        ],
        'interesses' => [
            'Back-end',
            'APIs',
            'Segurança da Informação'
        ],
        'projetos' => [
            [
                'nome' => 'API de Produtos',
                'descricao' => 'API para cadastro, atualização e consulta de produtos.',
                'tecnologias' => ['PHP', 'MySQL'],
                'nota' => 8.7
            ],
            [
                'nome' => 'Sistema de Chamados',
                'descricao' => 'Plataforma para registrar e acompanhar chamados técnicos.',
                'tecnologias' => ['Laravel', 'MySQL'],
                'nota' => 9.2
            ]
        ],
        'avaliacoes' => [
            [
                'autor' => 'Professora Juliana',
                'nota' => 5,
                'comentario' => 'Possui ótimo raciocínio lógico e organização.'
            ],
            [
                'autor' => 'Ana Souza',
                'nota' => 5,
                'comentario' => 'Sempre ajuda o grupo a encontrar soluções.'
            ]
        ]
    ],

    'carla' => [
        'senha' => 'design123',
        'nome' => 'Carla Mendes',
        'foto' => 'https://randomuser.me/api/portraits/women/65.jpg',
        'email' => 'carla.mendes@exemplo.com',
        'idade' => 20,
        'cidade' => 'Sorocaba',
        'estado' => 'SP',
        'curso' => 'Informática para Internet',
        'ocupacao' => 'Designer e estudante',
        'nivel' => 'Intermediário',
        'biografia' => 'Mistura design e programação para criar páginas modernas e acessíveis.',
        'pontos' => 1560,
        'media' => 9.6,
        'status' => 'Online',
        'habilidades' => [
            'Figma',
            'Photoshop',
            'HTML',
            'CSS',
            'JavaScript'
        ],
        'interesses' => [
            'Design de interfaces',
            'Front-end',
            'Ilustração digital'
        ],
        'projetos' => [
            [
                'nome' => 'Aplicativo de Receitas',
                'descricao' => 'Protótipo para pesquisar e salvar receitas favoritas.',
                'tecnologias' => ['Figma'],
                'nota' => 10.0
            ],
            [
                'nome' => 'Landing Page',
                'descricao' => 'Página de divulgação de um curso online.',
                'tecnologias' => ['HTML', 'CSS'],
                'nota' => 9.4
            ]
        ],
        'avaliacoes' => [
            [
                'autor' => 'Professor Ricardo',
                'nota' => 5,
                'comentario' => 'Excelente atenção aos detalhes e à experiência do usuário.'
            ]
        ]
    ],

    'diego' => [
        'senha' => 'dev456',
        'nome' => 'Diego Martins',
        'foto' => 'https://randomuser.me/api/portraits/men/32.jpg',
        'email' => 'diego.martins@exemplo.com',
        'idade' => 24,
        'cidade' => 'Jundiaí',
        'estado' => 'SP',
        'curso' => 'Engenharia de Software',
        'ocupacao' => 'Desenvolvedor Mobile',
        'nivel' => 'Avançado',
        'biografia' => 'Desenvolvedor curioso, fã de aplicativos, automação e novas tecnologias.',
        'pontos' => 2350,
        'media' => 9.0,
        'status' => 'Ocupado',
        'habilidades' => [
            'JavaScript',
            'React Native',
            'Node.js',
            'Git',
            'Firebase'
        ],
        'interesses' => [
            'Aplicativos móveis',
            'Automação',
            'Internet das Coisas'
        ],
        'projetos' => [
            [
                'nome' => 'Agenda de Estudos',
                'descricao' => 'Aplicativo para organizar aulas, provas e tarefas.',
                'tecnologias' => ['React Native', 'Firebase'],
                'nota' => 9.3
            ],
            [
                'nome' => 'Monitor de Hábitos',
                'descricao' => 'Aplicativo para acompanhar hábitos e metas pessoais.',
                'tecnologias' => ['JavaScript', 'Node.js'],
                'nota' => 8.9
            ]
        ],
        'avaliacoes' => [
            [
                'autor' => 'Professora Denise',
                'nota' => 5,
                'comentario' => 'Apresenta soluções criativas e código bem organizado.'
            ]
        ]
    ],

    'eduarda' => [
        'senha' => 'web789',
        'nome' => 'Eduarda Rocha',
        'foto' => 'https://randomuser.me/api/portraits/women/68.jpg',
        'email' => 'eduarda.rocha@exemplo.com',
        'idade' => 21,
        'cidade' => 'Santos',
        'estado' => 'SP',
        'curso' => 'Sistemas para Internet',
        'ocupacao' => 'Analista de Qualidade Júnior',
        'nivel' => 'Intermediário',
        'biografia' => 'Interessada em qualidade de software, acessibilidade e experiências inclusivas.',
        'pontos' => 1740,
        'media' => 9.4,
        'status' => 'Online',
        'habilidades' => [
            'PHP',
            'JavaScript',
            'Testes de Software',
            'Cypress',
            'Acessibilidade'
        ],
        'interesses' => [
            'Qualidade de software',
            'Acessibilidade',
            'Tecnologia educacional'
        ],
        'projetos' => [
            [
                'nome' => 'Portal de Cursos',
                'descricao' => 'Portal acessível para divulgação de cursos gratuitos.',
                'tecnologias' => ['PHP', 'JavaScript'],
                'nota' => 9.7
            ],
            [
                'nome' => 'Plano de Testes',
                'descricao' => 'Automação de testes para uma loja virtual.',
                'tecnologias' => ['Cypress', 'JavaScript'],
                'nota' => 9.1
            ]
        ],
        'avaliacoes' => [
            [
                'autor' => 'Professor Marcelo',
                'nota' => 5,
                'comentario' => 'Muito cuidadosa nos testes e na documentação.'
            ],
            [
                'autor' => 'Carla Mendes',
                'nota' => 5,
                'comentario' => 'Tem uma ótima visão de acessibilidade.'
            ]
        ]
    ]
];
