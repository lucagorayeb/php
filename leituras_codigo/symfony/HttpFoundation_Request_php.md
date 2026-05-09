# Isso vem do composer. O namespace que é
# para identificar a outras classes existentes.

namespace Symfony\Component\HttpFoundation;

# Importando classes para serem usadas no arquivo

use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpFoundation\Exception\ConflictingHeadersException;
use Symfony\Component\HttpFoundation\Exception\JsonException;
use Symfony\Component\HttpFoundation\Exception\SessionNotFoundException;
use Symfony\Component\HttpFoundation\Exception\SuspiciousOperationException;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

# Hints para o PHP opcache precarregar

class_exists(AcceptHeader::class);
class_exists(FileBag::class);
class_exists(HeaderBag::class);
class_exists(HeaderUtils::class);
class_exists(InputBag::class);
class_exists(ParameterBag::class);
class_exists(ServerBag::class);

-   opcache precarregar é uma feature do php que carrega as classes na memória
    antes de qualquer requisição ser executada.

    > Algumas classes são carregadas dinâmicamente no symfony
    > O php não detecta elas automaticamente
    > Então o symfony deixa explicito essa referencia usando o class_exists()

    * Garantindo que o precarregamento do opcache seja feito e carregue as classes.

-   Não executa nenhum lógica. Apenas mostra que está lá.

# Classe Request

-   A classe request representa uma requisição HTTP.

-   Os método lidam com o recebimento de URL e retornam um caminho raiz.

    * getBasePath
    * getBaseUrl
    * getPathInfo
    * getRequestUri
    * getUri
    * getUriForPath

#   Essas constantes são usadas para certos tipos de headers dos servidores sejam
#   considerados confiáveis ou não

    public const HEADER_FORWARDED = 0b000001; // When using RFC 7239
    public const HEADER_X_FORWARDED_FOR = 0b000010;
    public const HEADER_X_FORWARDED_HOST = 0b000100;
    public const HEADER_X_FORWARDED_PROTO = 0b001000;
    public const HEADER_X_FORWARDED_PORT = 0b010000;
    public const HEADER_X_FORWARDED_PREFIX = 0b100000;

    public const HEADER_X_FORWARDED_AWS_ELB = 0b0011010; // AWS ELB doesn't send X-Forwarded-Host
    public const HEADER_X_FORWARDED_TRAEFIK = 0b0111110; // All "X-Forwarded-*" headers sent by Traefik reverse proxy

#   Essas constantes são para evitar erros, tornar o código mais rápido e permitir que o
#   editor de texto consiga completar.

    public const METHOD_HEAD = 'HEAD';
    public const METHOD_GET = 'GET';
    public const METHOD_POST = 'POST';
    public const METHOD_PUT = 'PUT';
    public const METHOD_PATCH = 'PATCH';
    public const METHOD_DELETE = 'DELETE';
    public const METHOD_PURGE = 'PURGE';
    public const METHOD_OPTIONS = 'OPTIONS';
    public const METHOD_TRACE = 'TRACE';
    public const METHOD_CONNECT = 'CONNECT';
    public const METHOD_QUERY = 'QUERY';

#   Essas constantes servem para identificar o ip, host, http/https e a porta,
#   respectivamente. Esses são usados para proxys reversos.

    private const FORWARDED_PARAMS = [
        self::HEADER_X_FORWARDED_FOR => 'for',
        self::HEADER_X_FORWARDED_HOST => 'host',
        self::HEADER_X_FORWARDED_PROTO => 'proto',
        self::HEADER_X_FORWARDED_PORT => 'host',
    ];

#   Essas constantes servem para identificar o ip, host, http/https e a porta,
#   respectivamente.

    private const TRUSTED_HEADERS = [
        self::HEADER_FORWARDED => 'FORWARDED',
        self::HEADER_X_FORWARDED_FOR => 'X_FORWARDED_FOR',
        self::HEADER_X_FORWARDED_HOST => 'X_FORWARDED_HOST',
        self::HEADER_X_FORWARDED_PROTO => 'X_FORWARDED_PROTO',
        self::HEADER_X_FORWARDED_PORT => 'X_FORWARDED_PORT',
        self::HEADER_X_FORWARDED_PREFIX => 'X_FORWARDED_PREFIX',
    ];


#   Esse array de constantes serve para tratar os sufixos dos arquivos

    private const STRUCTURED_SUFFIX_FORMATS = [
            'json' => 'json',
            'xml' => 'xml',
            'xhtml' => 'html',
            'cbor' => 'cbor',
            'zip' => 'zip',
            'ber' => 'asn1',
            'der' => 'asn1',
            'tlv' => 'tlv',
            'wbxml' => 'xml',
            'yaml' => 'yaml',
        ];

#   Isso é uma nova funcionalidade do php 8.4 "Gancho de propriedade".
#   São getters e setters para propriedades.
#   Permite a definição de compotamentos quando alguém instância um atributo.

-   $request->attributes = new ParameterBag(); (O padrão que ainda é permitido).

-   $request->initialize(attributes: new ParameterBag()); (O padrão que vai permanecer no
    php 9).

    > Custom parameters.

        public ParameterBag $attributes {
                set {
                    trigger_deprecation('symfony/http-foundation', '8.1', 'Directly setting property "attributes" of "%s" is deprecated; pass attributes as a constructor argument or call "initialize()" instead.', __CLASS__);

                    $this->attributes = $value;
                }
            }

    > Request body parameters ($_POST).

        public InputBag $request {
                set {
                    trigger_deprecation('symfony/http-foundation', '8.1', 'Directly setting property "request" of "%s" is deprecated; pass the POST data as a constructor argument or call "initialize()" instead.', __CLASS__);

                    $this->request = $value;
                }
            }

    > Query string parameters ($_GET).

         public InputBag $query {
                set {
                    trigger_deprecation('symfony/http-foundation', '8.1', 'Directly setting property "query" of "%s" is deprecated; pass query parameters as a constructor argument or call "initialize()" instead.', __CLASS__);

                    $this->query = $value;
                }
            }

    > Server and execution environment parameters ($_SERVER).

        public ServerBag $server {
            set {
                trigger_deprecation('symfony/http-foundation', '8.1', 'Directly setting
                property "server" of "%s" is deprecated; pass server parameters as a
                constructor argument or call "initialize()" instead.', __CLASS__);

                $this->server = $value;
            }
        }

    > Uploaded files ($_FILES).

        public FileBag $files {
            set {
                trigger_deprecation('symfony/http-foundation', '8.1', 'Directly setting
                property "files" of "%s" is deprecated; pass files as a constructor argument
                or call "initialize()" instead.', __CLASS__);

                $this->files = $value;
            }
        }

    > Cookies ($_COOKIE).

        public InputBag $cookies {
            set {
                trigger_deprecation('symfony/http-foundation', '8.1', 'Directly setting
                property "cookies" of "%s" is deprecated; pass cookies as a constructor
                argument or call "initialize()" instead.', __CLASS__);

                $this->cookies = $value;
            }
        }

    > Headers (taken from the $_SERVER).

        public HeaderBag $headers {
            set {
                trigger_deprecation('symfony/http-foundation', '8.1', 'Directly setting
                property "headers" of "%s" is deprecated; pass header parameters as a
                constructor argument or call "initialize()" instead.', __CLASS__);

                $this->headers = $value;
            }
        }


