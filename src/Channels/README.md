You have to be [logged in](../../README.md) and have relevant permissions.

### CHANNEL LISTING

```php
$listing = \ATDev\RocketChat\Channels\Channel::listing();

if (!$result) {

	// Log the error
	$error = \ATDev\RocketChat\Channels\Channel::getError();
}
```

### CREATE CHANNEL

```php
$channel = new \ATDev\RocketChat\Channels\Channel();
$channel->setName("[CHANNEL-NAME-NO-SPACES]");
$channel->setReadOnly(true);

$result = $channel->create();

if (!$result) {

	// Log the error
	$error = $channel->getError();
}
```

### GET CHANNEL INFO

```php
$channel = new \ATDev\RocketChat\Channels\Channel("[CHANNEL ID]");

$result = $channel->info();

if (!$result) {

	// Log the error
	$error = $channel->getError();
}
```

### DELETE CHANNEL

```php
$channel = new \ATDev\RocketChat\Channels\Channel("[CHANNEL ID]");

$result = $channel->delete();

if (!$result) {

	// Log the error
	$error = $channel->getError();
}
```

### OPEN CHANNEL

```php
$channel = new \ATDev\RocketChat\Channels\Channel("[CHANNEL ID]");

$result = $channel->open();

if (!$result) {

	// Log the error
	$error = $channel->getError();
}
```

### CLOSE CHANNEL

```php
$channel = new \ATDev\RocketChat\Channels\Channel("[CHANNEL ID]");

$result = $channel->close();

if (!$result) {

	// Log the error
	$error = $channel->getError();
}
```

### INVITE USER TO CHANNEL

```php
$user = new \ATDev\RocketChat\Users\User("[USER ID]");
$channel = new \ATDev\RocketChat\Channels\Channel("[CHANNEL ID]");

$result = $channel->invite($user);

if (!$result) {

	// Log the error
	$error = $channel->getError();
}
```

### KICK USER OUT OF CHANNEL

```php
$user = new \ATDev\RocketChat\Users\User("[USER ID]");
$channel = new \ATDev\RocketChat\Channels\Channel("[CHANNEL ID]");

$result = $channel->kick($user);

if (!$result) {

	// Log the error
	$error = $channel->getError();
}
```

### ADD OWNER TO CHANNEL

```php
$user = new \ATDev\RocketChat\Users\User("[USER ID]");
$channel = new \ATDev\RocketChat\Channels\Channel("[CHANNEL ID]");

$result = $channel->addOwner($user);

if (!$result) {

	// Log the error
	$error = $channel->getError();
}
```

### REMOVE USER OUT OF CHANNEL

```php
$user = new \ATDev\RocketChat\Users\User("[USER ID]");
$channel = new \ATDev\RocketChat\Channels\Channel("[CHANNEL ID]");

$result = $channel->removeOwner($user);

if (!$result) {

	// Log the error
	$error = $channel->getError();
}
```
