const books = [
    {
        nombre : 'Python para todos',
        portada: 'https://i.postimg.cc/W42hFrbj/Portada-python-para-todos.png',
        area: 'informatica',
        linkVer: 'https://drive.google.com/file/d/1wpgE8GFiWAkpwExMDCJa_-OvPq5tP8oz/view?usp=sharing',
    },
    {
        nombre : 'Manual de PHP',
        portada: 'https://i.postimg.cc/NjvytS3K/Portada-Manual-de-PHP.png',
        linkVer: 'https://drive.google.com/file/d/14pu47oN30hujuwgD-sLeVkINh8WhnEfh/view?usp=sharing',
        area: 'informatica',
    },
    {
        nombre : 'Introduction to Docker',
        portada: 'https://i.postimg.cc/y65gQknX/Introduction-to-Docker.png',
        area: 'informatica',
        linkVer: 'https://drive.google.com/file/d/1Jp2AqWmbX4_sMg5zKzqNsA7gScCiczdw/view?usp=drive_link'
    },
    {
        nombre : 'introduccion a la programacion con Java',
        portada: 'https://i.postimg.cc/y8hD8nKv/introduccion-a-la-programacion-con-Java.png',
        area: 'informatica',
        linkVer: 'https://drive.google.com/file/d/14Looq_YKuOfmIhfmvhkDGoB6d9BQV1_f/view?usp=drive_link'
    },
    {
        nombre : 'HTML and CSS',
        portada: 'https://i.postimg.cc/pXF9gR6N/HTML-CSS.jpg',
        area: 'informatica',
        linkVer: 'https://drive.google.com/file/d/1FwHHWPrnEvdJik8iESpM2VO9t6sj3gkC/view?usp=drive_link'
    },
    {
        nombre : 'Fundamentos de programacion',
        portada: 'https://i.postimg.cc/cCVvrb65/fundamentos-de-programacion.jpg',
        area: 'informatica',
        linkVer: 'https://drive.google.com/file/d/1ssoOryqCXeUHUCc2_oclqRDR4X4Ti0Fu/view?usp=drive_link'
    },
    {
        nombre : 'Fundamentos de SQL',
        portada: 'https://i.postimg.cc/FzffF4FL/Fundamentos-de-SQL.png',
        area: 'informatica',
        linkVer: 'https://drive.google.com/file/d/1LWR3CbddiaMYNnVma5Mc20jtsOq0d1nl/view?usp=drive_link'
    },
    {
        nombre : 'Eloquent JavaScript',
        portada: 'https://i.postimg.cc/ZRsBhRmm/Eloquent-Java-Script.png',
        area: 'informatica',
        linkVer: 'https://drive.google.com/file/d/16PnXFWcz5Q2_JIExCkwCIFQSF2gt-Z0u/view?usp=drive_link'
    },
    {
        nombre : 'Aprendiendo Git',
        portada: 'https://i.postimg.cc/gJ2X5hf4/Aprendiendo-Git.jpg',
        area: 'informatica',
        linkVer: 'https://drive.google.com/file/d/1RMevqNYVyPEkPTsp4D9u_qdp20YbP2Zr/view?usp=drive_link'
    },
    {
        nombre : 'Uncommon service',
        portada: 'https://i.postimg.cc/RCf0QgkT/Uncommon-service.png',
        area: 'mercadeo',
        linkVer: 'https://drive.google.com/file/d/1LhS2RZYlTCNToP6elPgYYP5GkGItNsre/view?usp=sharing'
    },
    {
        nombre : 'The new rules Marketing PR',
        portada: 'https://i.postimg.cc/SRWNSK6P/The-new-rules-Marketing-PR.png',
        area: 'mercadeo',
        linkVer: 'https://drive.google.com/file/d/1LrTfs2nIZpTUrkG1NXP_2rwT4jD4Rej_/view?usp=drive_link'
    },
    {
        nombre : 'Pre suasin Robert Cialdini',
        portada: 'https://i.postimg.cc/prNLMjF8/Pre-suasi-n-Robert-Cialdini.png',
        area: 'mercadeo',
        linkVer: 'https://drive.google.com/file/d/1QOEyMoXThygwNk1gzMOb6N7PEInzOIOy/view?usp=drive_link'
    },
    {
        nombre : 'La vaca prpura',
        portada: 'https://i.postimg.cc/fLSRPCJD/La-vaca-p-rpura.png',
        area: 'mercadeo',
        linkVer: 'https://drive.google.com/file/d/1-A9Yks74ky2UtA8Kp8xa2NmdLTACpAhJ/view?usp=drive_link'
    },
    {
        nombre : 'Influencia Ciencia y Practica 2da Edicion',
        portada: 'https://i.postimg.cc/RZGhJqk5/Influencia-Ciencia-y-Pr-ctica-2da-Edici-n.png',
        area: 'mercadeo',
        linkVer: 'https://drive.google.com/file/d/138hEl1CA1-AFGogBwJV9P6WUKBs2eqrb/view?usp=drive_link'
    },
    {
        nombre : 'Harold bloom william faulkner',
        portada: 'https://i.postimg.cc/PqxxWTHL/harold-bloom-william-faulkner.png',
        area: 'mercadeo',
        linkVer: 'https://drive.google.com/file/d/1pY3tlCBKoHIFd5dUCoT1Yf-kvdMJAzKo/view?usp=drive_link'
    },
    {
        nombre : 'Fanocracy',
        portada: 'https://i.postimg.cc/VLqd1K4N/Fanocracy.png',
        area: 'mercadeo',
        linkVer: 'https://drive.google.com/file/d/1J8DxY5OBBQ1RCkjEkebxL2sDYs-sy3sx/view?usp=drive_link'
    },
    {
        nombre : 'Estrategia de marketing 6ta edicion',
        portada: 'https://i.postimg.cc/7ZqbLSQn/Estrategia-de-marketing-6ta-edicion.png',
        area: 'mercadeo',
        linkVer: 'https://drive.google.com/file/d/1JiEdJfSFWqaYNEknBMxRhzm1B7Z6vFdv/view?usp=drive_link'
    },
    {
        nombre : 'El marketing del permiso',
        portada: 'https://i.postimg.cc/7LWLXdPK/El-marketing-del-permiso.png',
        area: 'mercadeo',
        linkVer: 'https://drive.google.com/file/d/1RCR7K0hk9qjFzs8_EP17D4mIThUhCLlb/view?usp=drive_link'
    }
]

// ,
//     {
//         nombre : '',
//         portada: '',
//         area: '',
//         linkVer: '',
//         linkDescargar: ''
//     }

export default books