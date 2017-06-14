<?php

require_once('ini.php');

class CoreModel
{

    protected $_pdo;

    public function __construct() {
        $this->_pdo = SPDO::getInstance(DB_HOST, DB_DBNAME, DB_LOGIN, DB_PASS, DB_CHARSET, DB_COLLATE)->getPDO();

    }

    public function executeQuery( $req, $markers = null, $All = true, $fetchStyle = PDO::FETCH_ASSOC ) {
        $reqType = strtoupper(substr($req,0, 6));
        switch ($reqType) {
            case 'SELECT':
                if ($markers != null) {
                    $sth = $this->_pdo->prepare($req);
                    foreach ($markers as $key => $marker) {
                        $sth->bindValue( ":" . $key, $marker );
                    }
                    if ( ($result = $sth->execute()) != false ) {
                        if ($All != true) {
                            return $sth->fetchAll( $fetchStyle )[0];
                        } else {
                            return $sth->fetchAll( $fetchStyle );
                        }
                    } else {
                        return false;
                    }
                } else {
                    $sth = $this->_pdo->query($req);
                    if ( ($result = $sth->execute()) != false ) {
                        if ($All != true) {
                            return $sth->fetchAll( $fetchStyle )[0];
                        } else {
                            return $sth->fetchAll( $fetchStyle );
                        }
                    } else {
                        return false;
                    }
                }
            break;
            case 'UPDATE':
            case 'DELETE':
                if ( $warn = strpos($req, 'WHERE') != false ) {
                    $count = $this->_pdo->exec($req);
                    return $count;
                } else {
                    throw new Exception("NO WHERE IN REQUEST");
                }
            break;
            case 'INSERT':
            if ($markers != null) {
                $sth = $this->_pdo->prepare($req);
                foreach ($markers as $key => $marker) {
                    $sth->bindValue( $key, $marker );
                }
                if ( ($result = $sth->execute()) != false ) {
                    return $this->_pdo->lastInsertId();
                } else {
                    return false;
                }
            } else {
                if ( ($sth = $this->_pdo->query($req) != false )) {
                    return $this->_pdo->lastInsertId();
                } //else {
                  //  return false;
              //  }
            }
            break;

            default:
                throw new Exception("Error Processing CRUD executeQuery");
            break;
        }


    }

}
