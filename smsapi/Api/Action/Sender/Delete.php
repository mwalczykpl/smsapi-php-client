<?php

namespace SMSApi\Api\Action\Sender;

use SMSApi\Api\Action\AbstractAction;
use SMSApi\Proxy\Uri;

class Delete extends AbstractAction {

	protected function response( $data ) {

		return new \SMSApi\Api\Response\CountableResponse( $data );
	}

	public function uri() {

		$query = "";

		$query .= $this->paramsLoginToQuery();

		$query .= $this->paramsOther();

		return new Uri( $this->proxy->getProtocol(), $this->proxy->getHost(), $this->proxy->getPort(), "/api/sender.do", $query );
	}

	public function setSender( $senderName ) {
		$this->params[ "delete" ] = $senderName;
		return $this;
	}

}

