<?php
namespace dbService;
use \PDO;
use \Slim\Container;
class CarrosDAO
{
    private $connector;
    function __construct(Container $c=null)
    {
        $this->connector = $c['dbConnService']->getConn();
    }
    public function list()
    {
        $sql = "
            SELECT
                    *
            FROM [dbo].[carros]
        ";
        $stmt = $this->connector->prepare($sql);
        try {
            $stmt->execute();
        } catch (\Exception $e) {
            throw new SqlCommandException($e);
        }
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
}
?>
